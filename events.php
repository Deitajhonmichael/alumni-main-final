<?php
require_once 'config.php';
requireLogin();
requireVerification();

$conn = getDBConnection();
$alumni_id = getCurrentAlumniId();

// Handle event registration
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'register') {
    try {
        $event_id = $_POST['event_id'];
        $notes = sanitizeInput($_POST['notes']);
        
        // Check if already registered
        $stmt = $conn->prepare("SELECT id FROM event_registrations WHERE event_id = ? AND alumni_id = ?");
        $stmt->execute([$event_id, $alumni_id]);
        if ($stmt->fetch()) {
            flashMessage('warning', 'You are already registered for this event.');
        } else {
            // Get event details
            $stmt = $conn->prepare("SELECT * FROM events WHERE id = ?");
            $stmt->execute([$event_id]);
            $event = $stmt->fetch();
            
            if (!$event) {
                flashMessage('danger', 'Event not found.');
            } elseif (!$event['is_active']) {
                flashMessage('warning', 'This event is no longer active.');
            } elseif (strtotime($event['registration_deadline']) < time()) {
                flashMessage('warning', 'Registration for this event has closed.');
            } else {
                // Check max attendees
                if ($event['max_attendees']) {
                    $stmt = $conn->prepare("SELECT COUNT(*) FROM event_registrations WHERE event_id = ?");
                    $stmt->execute([$event_id]);
                    $current_attendees = $stmt->fetchColumn();
                    if ($current_attendees >= $event['max_attendees']) {
                        flashMessage('warning', 'This event is fully booked.');
                    } else {
                        $stmt = $conn->prepare("
                            INSERT INTO event_registrations (event_id, alumni_id, notes) 
                            VALUES (?, ?, ?)
                        ");
                        $stmt->execute([$event_id, $alumni_id, $notes]);
                        logActivity(getCurrentUserId(), 'Registered for event', 'events', $event_id);
                        flashMessage('success', 'Successfully registered for the event!');
                    }
                } else {
                    $stmt = $conn->prepare("
                        INSERT INTO event_registrations (event_id, alumni_id, notes) 
                        VALUES (?, ?, ?)
                    ");
                    $stmt->execute([$event_id, $alumni_id, $notes]);
                    logActivity(getCurrentUserId(), 'Registered for event', 'events', $event_id);
                    flashMessage('success', 'Successfully registered for the event!');
                }
            }
        }
        redirect('events.php');
    } catch(PDOException $e) {
        flashMessage('danger', 'Error registering: ' . $e->getMessage());
    }
}

// Get all events
$stmt = $conn->prepare("
    SELECT e.*, 
           (SELECT COUNT(*) FROM event_registrations WHERE event_id = e.id) as registered_count,
           er.id as registration_id
    FROM events e
    LEFT JOIN event_registrations er ON e.id = er.event_id AND er.alumni_id = ?
    WHERE e.is_active = TRUE
    ORDER BY e.event_date ASC
");
$stmt->execute([$alumni_id]);
$events = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - <?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: white;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            margin: 5px 10px;
            border-radius: 8px;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.2);
            color: white;
        }
        .event-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            overflow: hidden;
        }
        .event-card:hover {
            transform: translateY(-5px);
        }
        .event-image {
            height: 150px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .event-date {
            position: absolute;
            top: 10px;
            right: 10px;
            background: white;
            border-radius: 10px;
            padding: 8px 12px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        .event-date .day {
            font-size: 24px;
            font-weight: 700;
            color: #667eea;
            line-height: 1;
        }
        .event-date .month {
            font-size: 12px;
            text-transform: uppercase;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-0">
                <div class="p-4">
                    <h4><i class="fas fa-graduation-cap"></i> Alumni</h4>
                    <p class="small opacity-75">Management System</p>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="dashboard.php"><i class="fas fa-home me-2"></i> Dashboard</a>
                    <a class="nav-link" href="profile.php"><i class="fas fa-user me-2"></i> My Profile</a>
                    <a class="nav-link" href="transcripts.php"><i class="fas fa-file-alt me-2"></i> Transcripts</a>
                    <a class="nav-link" href="tracking.php"><i class="fas fa-chart-line me-2"></i> Graduate Tracking</a>
                    <a class="nav-link" href="placements.php"><i class="fas fa-briefcase me-2"></i> Job Placements</a>
                    <a class="nav-link active" href="events.php"><i class="fas fa-calendar me-2"></i> Events</a>
                    <a class="nav-link" href="reunions.php"><i class="fas fa-users me-2"></i> Reunions</a>
                    <a class="nav-link" href="donations.php"><i class="fas fa-heart me-2"></i> Donations</a>
                    <a class="nav-link" href="certificates.php"><i class="fas fa-certificate me-2"></i> Certificates</a>
                    <a class="nav-link" href="newsletter.php"><i class="fas fa-envelope me-2"></i> Newsletter</a>
                    <a class="nav-link" href="feedback.php"><i class="fas fa-comment me-2"></i> Feedback</a>
                    <a class="nav-link" href="surveys.php"><i class="fas fa-poll me-2"></i> Surveys</a>
                    <hr class="my-2 mx-3" style="border-color: rgba(255,255,255,0.3);">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                </nav>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                <?php $flash = getFlashMessage(); ?>
                <?php if ($flash): ?>
                    <div class="alert alert-<?php echo $flash['type']; ?> alert-dismissible fade show">
                        <?php echo $flash['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>
                
                <h2 class="mb-4">Alumni Events</h2>
                
                <!-- My Registrations -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-ticket-alt me-2"></i>My Registrations</h5>
                    </div>
                    <div class="card-body">
                        <?php 
                        $my_registrations = array_filter($events, function($e) { return $e['registration_id'] !== null; });
                        if ($my_registrations): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Event</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($my_registrations as $event): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($event['title']); ?></td>
                                                <td><?php echo formatDate($event['event_date']); ?></td>
                                                <td><?php echo htmlspecialchars($event['location']); ?></td>
                                                <td>
                                                    <span class="badge bg-success">Registered</span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <p class="text-muted">You haven't registered for any events yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Available Events -->
                <h4 class="mb-3">Available Events</h4>
                <div class="row">
                    <?php if ($events): ?>
                        <?php foreach ($events as $event): ?>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card event-card">
                                    <div class="event-image position-relative">
                                        <div class="event-date">
                                            <div class="day"><?php echo date('d', strtotime($event['event_date'])); ?></div>
                                            <div class="month"><?php echo date('M', strtotime($event['event_date'])); ?></div>
                                        </div>
                                        <i class="fas fa-calendar-alt fa-3x text-white"></i>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($event['title']); ?></h5>
                                        <p class="card-text text-muted small mb-2">
                                            <i class="fas fa-map-marker-alt me-1"></i><?php echo htmlspecialchars($event['location']); ?>
                                        </p>
                                        <p class="card-text text-muted small mb-2">
                                            <i class="fas fa-clock me-1"></i><?php echo $event['event_time'] ? date('g:i A', strtotime($event['event_time'])) : 'TBA'; ?>
                                        </p>
                                        <p class="card-text small mb-3">
                                            <?php echo htmlspecialchars(substr($event['description'], 0, 100)) . (strlen($event['description']) > 100 ? '...' : ''); ?>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">
                                                <i class="fas fa-users me-1"></i>
                                                <?php echo $event['registered_count']; ?> 
                                                <?php echo $event['max_attendees'] ? '/ ' . $event['max_attendees'] : ''; ?> registered
                                            </small>
                                            <?php if ($event['registration_id']): ?>
                                                <span class="badge bg-success">Registered</span>
                                            <?php else: ?>
                                                <?php if (strtotime($event['registration_deadline']) >= time()): ?>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal<?php echo $event['id']; ?>">
                                                        Register
                                                    </button>
                                                <?php else: ?>
                                                    <span class="badge bg-secondary">Closed</span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="fas fa-calendar fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No events available at the moment.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Registration Modals -->
    <?php foreach ($events as $event): ?>
        <?php if (!$event['registration_id'] && strtotime($event['registration_deadline']) >= time()): ?>
            <div class="modal fade" id="registerModal<?php echo $event['id']; ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Register for Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form method="POST" action="">
                            <div class="modal-body">
                                <input type="hidden" name="action" value="register">
                                <input type="hidden" name="event_id" value="<?php echo $event['id']; ?>">
                                <h6><?php echo htmlspecialchars($event['title']); ?></h6>
                                <p class="text-muted small">
                                    <i class="fas fa-calendar me-1"></i><?php echo formatDate($event['event_date']); ?><br>
                                    <i class="fas fa-map-marker-alt me-1"></i><?php echo htmlspecialchars($event['location']); ?>
                                </p>
                                <div class="mb-3">
                                    <label class="form-label">Notes (Optional)</label>
                                    <textarea class="form-control" name="notes" rows="2" placeholder="Any special requirements or notes..."></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
