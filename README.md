<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# P18 Fitness Web App

Welcome to the **P18 Fitness Web App**! This application is a comprehensive fitness platform designed to provide users with a range of workout programs, personalized training, and progress tracking. Whether you're a beginner or an experienced fitness enthusiast, P18 Fitness is here to help you stay on top of your fitness journey.

<p>
   <div  align="center">
    <img src="https://github.com/user-attachments/assets/807e1665-fc78-4867-9bda-6411229b5a12" width="20%" />
    <img src="https://github.com/user-attachments/assets/4b5dc428-a084-4954-82e1-764e3feda5c3" width="20%" />
    <img src="https://github.com/user-attachments/assets/75228588-f77d-4da6-a30a-9d2cb4aa8aa7" width="20%" />
      <img src="https://github.com/user-attachments/assets/e21716c6-a7ae-4e2a-841d-470879fb1b7b" width="20%" />
   </div>
      <div  align="center">
    <img src="https://github.com/user-attachments/assets/ba2f71ca-2a8d-4b6b-92e2-90e70bff0950" width="20%" />
    <img src="https://github.com/user-attachments/assets/cb9a15a4-517f-4782-a1a4-4091cd823425" width="20%" />
             <img src="https://github.com/user-attachments/assets/312fcd87-9803-4971-b284-625469e1f99f" width="20%" />
    <img src="https://github.com/user-attachments/assets/e2ca07e7-3740-4849-bc47-9a7412c9bdee" width="20%" />
   </div>
</p>


  

## Features

### 1. **User Authentication and Profiles**
- **Sign Up / Login:** Users can create an account or log in using their credentials.
- **Profile Management:** Users can personalize their profile by adding their name, profile picture, and fitness goals.

### 2. **Video Integration & Training Programs**
- **YouTube Integration:** Access a range of YouTube workout videos directly in the app. 
- **Custom Video List:** Sorted by days (e.g., Day 1, Day 2, etc.), users can watch and complete videos in sequence.
- **Progress Tracking:** Watch videos and track progress using a visual progress bar. Videos are marked as completed after watching.

### 3. **Workout Plans**
- **Weekly Programs:** Users can follow daily workout plans categorized by week (e.g., Week 1, Week 2, etc.), including different types of workouts such as upper body, lower body, HIIT, and more.
- **Completion & Feedback:** Once users complete a workout, they can mark it as "completed" and submit feedback.

### 4. **Gamification**
- **Progress Points:** Users earn points for completing each workout and achieving milestones.
- **Leaderboards:** View rankings based on points earned from completed workouts.

### 5. **Video Comments and Feedback**
- Users can leave feedback on each video via a comment box, which is sent to an email for tracking.

### 6. **Responsive Design**
- The app is designed to be fully responsive, ensuring a smooth user experience on desktop, tablet, and mobile devices.

### 7. **Two-Factor Authentication (2FA)**
- For added security, users can enable 2FA for their account to protect sensitive data.

### 8. **Admin Panel**
- Admins can manage videos, monitor user progress, and send email notifications about new content or updates.

---

## Installation

### Prerequisites
Before starting, ensure you have the following installed on your system:

- [Node.js](https://nodejs.org/)
- [Laravel 11](https://laravel.com/docs/11.x) (For backend setup)
- [Composer](https://getcomposer.org/)

### Getting Started

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/p18-fitness.git
   cd p18-fitness

   Install dependencies For backend:

bash
Copy code
composer install
For frontend:

bash
Copy code
npm install
Set up environment variables Copy .env.example to .env and set the necessary environment variables:

bash
Copy code
cp .env.example .env
php artisan key:generate
Set up the database

Configure your database in the .env file (e.g., MySQL, SQLite).
Run migrations:
bash
Copy code
php artisan migrate
Run the development server For Laravel backend:

bash
Copy code
php artisan serve
For frontend (with Laravel Mix):

bash
Copy code
npm run dev
Access the application Open your browser and navigate to:

arduino
Copy code
http://localhost:8000
Technology Stack
Frontend:

HTML, CSS, JavaScript
Vue.js (for dynamic components)
Tailwind CSS (for styling)
Alpine.js (for interactive elements)
Backend:

Laravel 11
MySQL (Database)
Laravel Passport (Authentication)
Mailgun (Email Notifications)
Contribution Guidelines
We welcome contributions! If you'd like to help make P18 Fitness even better, please follow these guidelines:

Fork the repository.
Create a new branch for each significant change.
Make your changes and commit them.
Write tests for new features or bug fixes.
Submit a pull request with a clear description of your changes.
License
This project is licensed under the MIT License - see the LICENSE.md file for details.
