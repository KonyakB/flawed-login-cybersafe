@extends('layouts.app')

@section('title', 'Robot Control Center')

@section('content')
<div class="robotics-bg">
    <div class="robotics-card">
        <div class="robotics-icon">
            <!-- Industrial robot arm SVG -->
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                <rect x="10" y="45" width="40" height="10" rx="3" fill="#CFD8DC"/>
                <rect x="27" y="25" width="6" height="20" rx="2" fill="#90A4AE"/>
                <circle cx="30" cy="20" r="8" fill="#FFD600" stroke="#757575" stroke-width="2"/>
                <rect x="28" y="10" width="4" height="10" rx="1" fill="#757575"/>
            </svg>
        </div>
        <h1>Welcome Home, Operator!</h1>
        <p class="robotics-text">
            You are logged in to the <span class="robotics-highlight">Industrial Robotics Control Center</span>.
        </p>
        <div class="robotics-circuit"></div>
    </div>
</div>
@endsection

@push('styles')
<style>
.robotics-bg {
    min-height: 100vh;
    background: linear-gradient(135deg, #F5F5F5 0%, #ECEFF1 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}
.robotics-card {
    background: #FFFFFF;
    border: 2px solid #FFD600;
    border-radius: 16px;
    padding: 48px 36px;
    box-shadow: 0 6px 24px rgba(200, 200, 200, 0.25);
    text-align: center;
    position: relative;
    max-width: 400px;
}
.robotics-icon {
    margin-bottom: 24px;
}
.robotics-text {
    color: #607D8B;
    font-size: 1.1rem;
    margin-bottom: 24px;
}
.robotics-highlight {
    color: #FFD600;
    font-weight: bold;
}
.robotics-circuit {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 32px;
    background: url('data:image/svg+xml;utf8,<svg width="400" height="32" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="12" width="360" height="8" rx="4" fill="%2390A4AE"/><circle cx="30" cy="16" r="4" fill="%23FFD600"/><circle cx="370" cy="16" r="4" fill="%23FFD600"/></svg>') no-repeat center;
    opacity: 0.15;
}
h1 {
    color: #263238;
    font-weight: 700;
}
</style>
@endpush

