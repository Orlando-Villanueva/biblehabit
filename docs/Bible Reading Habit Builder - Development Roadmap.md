# **Bible Reading Habit Builder - Development Roadmap**

**Core Tech Stack:**

* **Backend:** Laravel  
* **Database:** Serverless PostgreSQL (via Laravel Cloud)  
* **Web Frontend:** HTMX + Alpine.js  
* **Deployment:** Laravel Cloud (PaaS)
* **Development Workflow:** Continuous deployment with feature-based PR structure

## **📋 Roadmap Updates (Post PR-4 Completion)**

**✅ Authentication Completed:** Successfully implemented user authentication with simplified standard Laravel forms instead of HTMX for reliability and MVP speed (~300 lines of JavaScript complexity removed).

**🔄 Prioritization Changes:** Reordered PRs 5-10 to prioritize core user functionality over UI polish:
- **Accelerated:** Reading log core features (PR-5) moved up as highest priority  
- **Combined:** UI refinements integrated into later PRs since design system is 85% complete
- **Streamlined:** Reduced from 18 PRs to 10 PRs by combining related functionality
- **Focus Shift:** Emphasis on essential features first, polish and performance later

## **MVP Development Plan**

**Goal:** Launch the core "Read → Log → See Progress" loop to help users establish Bible reading habits.

**Timeline:** 8 Weeks (6 weeks remaining)

### **Development Workflow**

* **Feature-Based PRs:** Each feature developed in a separate branch
* **Continuous Deployment:** Every pushed commit to the main branch triggers automatic deployment to production
* **Hybrid Frontend Approach:** Standard Laravel forms for authentication (simplified), HTMX for dynamic app features (reading logs, dashboard updates)
* **Testing Integration:** 1-2 user testing sessions during development
* **PR Structure:** Clear, focused PRs with descriptive titles and descriptions
* **PR Reviews:** Self-review required before merging

### **Week 1: Foundation & Environment Setup**

**PR 1: Project Scaffolding (3-4 days)**
* Set up Laravel project with HTMX + Alpine.js
* Configure dual database environment:
  - SQLite for local development (zero-configuration)
  - Serverless PostgreSQL for production via Laravel Cloud
* Configure local development environment (using Laravel Herd for local, Laravel Cloud for production)
* Initialize Git repository
* ✅ Implement basic responsive layout structure with:
  - Dual navigation system (3-tab mobile bottom nav + desktop sidebar)
  - Floating Action Button for primary "Log Reading" action
  - 70%/30% content layout for desktop
  - Mobile-first responsive design with proper touch targets

**PR 2: Deployment Pipeline (1-2 days)**
* Set up Laravel Cloud infrastructure with one-click deployment
* Provision Serverless PostgreSQL database with automatic scaling
* Configure CI/CD pipeline with GitHub (push-to-deploy)
* Set up automatic deployment for all pushed commits
* Configure deployment environments (staging/production)
* Leverage Laravel Cloud's automatic environment variable injection
* Set up built-in monitoring, logging, and error tracking
* Configure edge network and CDN for global performance

**PR 3: Database Foundations (2-3 days)**
* Design core database schema for dual environment:
  - SQLite migrations for local development
  - PostgreSQL-optimized migrations for production
* Create migrations for users, reading_logs, book_progress tables
* Define Eloquent models with database-agnostic queries
* Create Bible reference configuration file with static data for all 66 books
* Basic database compatibility verification (2-3 hours):
  - Test migration compatibility across SQLite and PostgreSQL
  - Verify essential model validations and constraints
  - Confirm core user workflow functions on both databases

### **Week 2: Authentication & Core Features**

**✅ PR 4: User Authentication (COMPLETED)**
* ✅ Install and configure Laravel Fortify for backend authentication
* ✅ Create standard Laravel authentication forms (login, registration, password reset)
* ✅ Configure user model and authentication guards
* ✅ Implement authentication middleware and route protection

### **Week 3: Reading Log Core Features**

**PR 5: Reading Log Core Features (3-4 days)** 
*Priority: High - Core user functionality*
* Implement BibleReferenceService (config/bible.php + translations in lang/{locale}/bible.php)
* Create dynamic Bible book/chapter selection with validation (66 books, chapter counts)
* Build reading log form with validation using ReadingLogService
* Implement book progress tracking with denormalized table updates (JSON storage)
* Create minimal reading history view (unstyled, functional only)
* Add HTMX integration for seamless form submissions and dynamic updates
* **Note: Minimal UI only - basic HTML structure without styling/design**

### **Week 4: Design System & Dashboard**

**PR 6: Design System Implementation (2-3 days)**
*Priority: High - Design foundation for all components*
* **Use ui-prototype as design foundation** - translate React components to Blade templates
* Extract exact design tokens from prototype (colors: #3366CC, #66CC99, spacing, typography)
* Create comprehensive Tailwind design system matching the prototype's visual identity
* Build reusable Blade components based on prototype structure:
  - Card layouts and component hierarchy from dashboard-layout.tsx
  - Streak counter component from streak-card.tsx
  - Summary statistics cards from summary-stats.tsx
  - Book completion grid from book-completion-grid.tsx
  - Calendar visualization from calendar-visualization.tsx
* Apply pixel-perfect design to ALL existing pages (auth, dashboard, forms, history)
* **Remove Pro features from prototype** - eliminate premium indicators, crown icons, and "Pro" badges for MVP
* Implement responsive grid system and mobile-first approach exactly as shown in prototype

**PR 7: Dashboard & User Analytics (2-3 days)**
*Priority: High - Essential user engagement*
* Create dashboard using exact prototype layout and component structure
* Implement UserStatisticsService with streak calculation (1-day grace period logic)
* Build GitHub-style calendar visualization matching calendar-visualization.tsx design
* Implement summary statistics exactly as shown in prototype:
  - "16/30 This Month" reading days counter
  - "10.5 Chapters/Week" velocity metric
  - "13% Bible Progress" overall completion
  - "10-day Next Milestone" simple goal display
* Create streak counter component matching streak-card.tsx (current: 5 days, longest: 29 days)
* Add dashboard reading log quick-entry (Floating Action Button mobile / Header Button desktop)
* Implement HTMX updates for dynamic content refresh after reading log submissions

### **Week 5: Bible Reading Tracking System**

**PR 8: Bible Reading Tracking System (3-4 days)**
*Priority: Medium - Enhanced user experience*
* Implement Book Completion Grid exactly matching book-completion-grid.tsx:
  - Testament toggle (Old/New Testament) with 39/27 book split
  - Individual book percentages ("Genesis 24%", "Psalms 17%", etc.)
  - Color-coded status (blue in-progress, green completed, gray not started)
  - Mini progress bars for in-progress books
  - Completion badges for finished books
  - Overall testament progress ("6%" with progress bar)
  - Statistics summary (3 completed, 2 in progress, 34 not started)
* Enhance book completion tracking with detailed progress calculation
* Create advanced calendar features (hover states, reading details popup)
* Add reading pattern analytics and summary statistics display
* Implement automatic progress update triggers and cache invalidation

**[User Testing Session #1]** - Focus on core functionality and user flow

### **Week 6: Enhanced Features & Multilingual Support**

**PR 9: Enhanced Features & Multilingual Support (2-3 days)**
*Priority: Medium - Market expansion and UX polish*
* Implement French localization using documented lang files (Bible book translations)
* Add advanced statistics visualizations (enhanced calendar features, reading patterns)
* Create language toggle component and seamless switching functionality
* Polish responsive design based on user testing feedback (mobile/desktop hybrid patterns)
* Implement theme toggle (light/dark mode) from design system

### **Week 7: Performance & Accessibility**

**PR 10: Performance & Accessibility (3-4 days)**
*Priority: Medium - Production readiness*
* Set up caching strategy for user statistics and Bible data
* Optimize database queries and add proper indexing
* Ensure WCAG 2.1 AA compliance with ARIA labels and keyboard navigation
* Add HTMX loading indicators and error handling
* Implement performance monitoring and optimization

**[User Testing Session #2]** - Focus on performance, accessibility, and final UX

### **Week 8: Final Polish & Production Deployment**

**PR 11: Final Polish & Production Deployment (2-3 days)**
*Priority: High - Launch readiness*
* Address user testing feedback from sessions #1 and #2
* Cross-browser compatibility and mobile responsiveness validation
* Security audit and performance benchmarking
* Configure production monitoring and analytics
* Complete final production deployment with Laravel Cloud

## **Key Milestones**

1. **✅ End of Week 2:** Authentication system completed (PR-4)
2. **End of Week 3:** Core reading log functionality with Bible reference system (PR-5)
3. **Early Week 4:** Design system implementation using ui-prototype as foundation (PR-6)
4. **End of Week 4:** Dashboard and user analytics matching prototype design exactly (PR-7)
5. **End of Week 5:** Enhanced Bible reading tracking and book completion system (PR-8)
6. **Mid-Week 6:** Enhanced features and multilingual support (PR-9, 2-3 days)
7. **End of Week 8:** Production-ready application with full testing and deployment (PR-10, PR-11)

## **Future Phases**

After validating the MVP with real users, future phases will expand the application with:

### **Phase 2: Enhanced User Experience & Engagement**
* **Social Authentication (Laravel Socialite)**
  - Google OAuth integration for seamless sign-in
  - Facebook OAuth for Christian community users
  - Apple Sign-In for privacy-focused authentication
  - Account linking for existing users
  - Social profile data enhancement (verified emails, profile pictures)
* **Achievement/Badge System (Major Feature Release)**
  - Core badges free for all users (book completions, streak milestones)
  - Enhanced badge features for Pro subscribers (premium designs, analytics)
  - Achievement celebrations and milestone recognition
* **Advanced Statistics & Analytics (Pro Tier)**
  - Detailed reading patterns and trend analysis
  - Advanced charts and performance insights
  - Reading pace analysis and predictions
* Reading plans and goals
* Enhanced habit formation mechanics

### **Phase 3: Mobile & Extended Features**
* Mobile applications (iOS/Android)
* Advanced social features and community integration

_Note: This roadmap focuses on the MVP phase only. Future phases will be planned based on user feedback and validation of core concepts._