<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>General Indicators of the Brain</title>
  <link rel="stylesheet" href="src/health.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="dashboard">
    <!-- Main Title -->
    <h1 class="main-title">General indicators of the Brain </h1>

    <!-- Left Column -->
    <div class="left-column">
      <!-- My Brain Condition Stats -->
      <div class="card brain-condition-stats">
        <div class="card-header">
          <span class="dot blue"></span>
          <span class="card-title">My Brain Condition</span>
        </div>
        <div class="stats-grid">
          <div class="stat-item">
            <span class="stat-value">1.5l</span>
            <span class="stat-label">blood</span>
          </div>
          <div class="stat-item">
            <span class="stat-value">10g</span>
            <span class="stat-label">Hemoglobin</span>
          </div>
          <div class="stat-item">
            <span class="stat-value">50g</span>
            <span class="stat-label">glucose</span>
          </div>
          <div class="stat-item">
            <span class="stat-value">9mm</span>
            <span class="stat-label">pressure diff</span>
          </div>
        </div>
      </div>

      <!-- My Physiological Parameters -->
      <div class="card physiological-params">
        <div class="card-header">
          <span class="dot blue"></span>
          <span class="card-title">My Physiological Parameters</span>
        </div>
        <div class="params-grid">
          <div class="param-box">
            <div class="param-icon temp-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <path d="M14 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z"/>
              </svg>
            </div>
            <span class="param-label">Temperature</span>
            <span class="param-value large">36.6°C</span>
          </div>
          <div class="param-box">
            <div class="param-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <path d="M12 2v20M2 12h20"/>
              </svg>
            </div>
            <span class="param-label">Sleep time</span>
            <div class="sleep-bars">
              <div class="bar" style="height: 60%"></div>
              <div class="bar" style="height: 80%"></div>
              <div class="bar" style="height: 40%"></div>
              <div class="bar" style="height: 90%"></div>
              <div class="bar" style="height: 70%"></div>
              <div class="bar" style="height: 50%"></div>
              <div class="bar" style="height: 85%"></div>
            </div>
            <span class="sleep-hours">8 <small>hours</small></span>
          </div>
          <div class="param-box">
            <div class="param-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 6v6l4 2"/>
              </svg>
            </div>
            <span class="param-label">Blood pressure</span>
            <div class="pressure-labels">
              <span>Sys pressure</span>
              <span>Dia pressure</span>
            </div>
            <div class="pressure-wave">
              <svg viewBox="0 0 100 30" preserveAspectRatio="none">
                <path d="M0,15 Q10,15 15,10 T25,15 T35,5 T45,15 T55,15 T65,10 T75,15 T85,20 T100,15" 
                      fill="none" stroke="#3b82f6" stroke-width="1.5"/>
              </svg>
            </div>
          </div>
          <div class="param-box pulse-box">
            <div class="param-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
              </svg>
            </div>
            <span class="param-label">Pulse</span>
            <div class="pulse-display">
              <span class="pulse-value">65</span>
              <span class="pulse-unit">bpm</span>
            </div>
            <div class="pulse-indicator"></div>
          </div>
        </div>
      </div>

      <!-- Bottom Cards -->
      <div class="card bottom-section">
        <div class="card-header">
          <span class="dot blue"></span>
          <span class="card-title">My Brain Condition</span>
          <div class="doctor-badges">
            <div class="doctor-badge">
              <img src="/brain.png?height=24&width=24" alt="Doctor">
              <span>Doctor<br>Rodriguez</span>
            </div>
          </div>
        </div>
        <div class="bottom-cards-grid">
          <!-- Full Brain MRI -->
          <div class="bottom-card mri-card">
            <h4>Full Brain</h4>
            <p class="card-subtitle">MRI</p>
            <div class="mri-grid">
              <img src="/placeholder.svg?height=40&width=40" alt="MRI 1">
              <img src="/placeholder.svg?height=40&width=40" alt="MRI 2">
              <img src="/placeholder.svg?height=40&width=40" alt="MRI 3">
              <img src="/placeholder.svg?height=40&width=40" alt="MRI 4">
              <img src="/placeholder.svg?height=40&width=40" alt="MRI 5">
              <img src="/placeholder.svg?height=40&width=40" alt="MRI 6">
            </div>
            <button class="see-results-btn">See results</button>
            <div class="mri-progress">
              <svg width="24" height="24" viewBox="0 0 36 36">
                <circle cx="18" cy="18" r="15" fill="none" stroke="#e5e7eb" stroke-width="3"/>
                <circle cx="18" cy="18" r="15" fill="none" stroke="#3b82f6" stroke-width="3" 
                        stroke-dasharray="30 100" stroke-linecap="round" transform="rotate(-90 18 18)"/>
              </svg>
              <span>31%</span>
            </div>
          </div>

          <!-- Full Blood Test -->
          <div class="bottom-card blood-card">
            <div class="blood-badge">
              <span class="badge-number">2</span>
            </div>
            <h4>Full Blood</h4>
            <p class="card-subtitle">Test</p>
            <div class="blood-progress">
              <svg width="80" height="80" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="40" fill="none" stroke="#e5e7eb" stroke-width="8"/>
                <circle cx="50" cy="50" r="40" fill="none" stroke="#3b82f6" stroke-width="8" 
                        stroke-dasharray="200 251" stroke-linecap="round" transform="rotate(-90 50 50)"/>
              </svg>
              <span class="progress-text">Done testing</span>
            </div>
          </div>

          <!-- Visit Cardiologist -->
          <div class="bottom-card cardio-card">
            <div class="cardio-badge">
              <img src="/placeholder.svg?height=24&width=24" alt="Doctor">
              <span>Doctor<br>Collins</span>
            </div>
            <div class="badge-number cardio-number">3</div>
            <h4>Visit</h4>
            <p class="card-subtitle">Cardiologist</p>
            <div class="ecg-line">
              <svg viewBox="0 0 120 40" preserveAspectRatio="none">
                <path d="M0,20 L20,20 L25,20 L30,5 L35,35 L40,10 L45,25 L50,20 L70,20 L75,20 L80,8 L85,32 L90,12 L95,22 L100,20 L120,20" 
                      fill="none" stroke="#3b82f6" stroke-width="1.5"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Center Brain Image -->
    <div class="brain-container">
      <div class="brain-circle outer"></div>
      <div class="brain-circle inner"></div>

      <img src="brain.png?height=800&width=450" 
           alt="brain.png" class="brain">
      <!-- Annotation markers -->
      <div class="marker marker-1"></div>
      <div class="marker marker-2"></div>
      <div class="marker marker-3"></div>
      <div class="marker marker-4"></div>
      <div class="marker marker-5"></div>
    </div>

    <!-- Right Column -->
    <div class="right-column">
      <!-- Patient Card -->
      <div class="card patient-card">
        <div class="card-header">
          <span class="dot red"></span>
          <span class="card-title">Patient</span>
        </div>
        <div class="patient-list">
          <div class="patient-item active">
            <img src="/placeholder.svg?height=32&width=32" alt="Jason">
            <div class="patient-info">
              <span class="patient-name">Jason Nelson</span>
            </div>
            <span class="patient-check">&#10003;</span>
          </div>
          <div class="patient-item">
            <img src="/placeholder.svg?height=32&width=32" alt="Patient">
            <div class="patient-info">
              <span class="patient-name">Jhordaine's disease</span>
            </div>
            <span class="patient-radio"></span>
          </div>
          <div class="patient-item">
            <img src="/placeholder.svg?height=32&width=32" alt="Patient">
            <div class="patient-info">
              <span class="patient-name">Encephalitis</span>
            </div>
            <span class="patient-radio"></span>
          </div>
        </div>
      </div>

      <!-- My Schedule Card -->
      <div class="card schedule-card">
        <div class="card-header">
          <span class="dot blue"></span>
          <span class="card-title">My Schedule</span>
        </div>
        <div class="schedule-list">
          <div class="schedule-item">
            <div class="schedule-icon blue-bg">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
            </div>
            <div class="schedule-info">
              <span class="schedule-title">Next Checkup</span>
              <span class="schedule-date">Fri, 20 Apr</span>
            </div>
          </div>
          <div class="schedule-item">
            <div class="schedule-icon yellow-bg">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
            </div>
            <div class="schedule-info">
              <span class="schedule-date">06-April-01</span>
            </div>
          </div>
          <div class="schedule-item">
            <div class="schedule-avatar">
              <img src="/placeholder.svg?height=32&width=32" alt="Dr. Sharoon">
            </div>
            <div class="schedule-info">
              <span class="schedule-title">Dr. sharoon Jam</span>
            </div>
          </div>
        </div>
        <button class="consult-btn">Consult Now</button>
      </div>
    </div>

    <!-- Bottom Navigation -->
    <nav class="bottom-nav">
      <a href="#" class="nav-item active">Home</a>
      <a href="#" class="nav-item">Product</a>
      <a href="#" class="nav-item">About</a>
      <a href="#" class="nav-item">Contact</a>
    </nav>
  </div>
</body>
</html>
