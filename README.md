# Promote App - Custom WordPress Theme

Welcome to the **Promote App** WordPress theme. 

This theme was successfully converted from a modern React (Vite + Tailwind CSS) Single Page Application (SPA) into a native, high-performance PHP WordPress theme.

## Theme Architecture

To maintain the exact high-fidelity design and ensure the codebase remains scalable without relying on `.jsx` files, the theme utilizes WordPress's native `template-parts` system.

### Template Parts Breakdown
All UI components have been translated into pure HTML/PHP and are located inside the `template-parts/` directory:

- `navbar.php` - The main navigation menu. Includes vanilla JavaScript for the responsive mobile menu toggle.
- `hero.php` - The hero section with gradients and core messaging.
- `stats.php` - Statistics and numbers showcase.
- `about.php` - "What is Promote App?" section.
- `how-it-works.php` - The dual workflow for Businesses and Influencers.
- `why-choose.php` - Visual banner for choosing Promote App.
- `collaborations.php` - Celebrity & Professional Collaborations tab system (includes vanilla JS for tab toggling).
- `collaboration-categories.php` - Available Collaboration Categories grid.
- `who-can-use.php` - Lists for businesses and influencers.
- `trust-support.php` - Trust, Security & Support feature lists.
- `contact.php` - Contact information and footer area.

These template parts are assembled in `front-page.php` to recreate the original flow of the React Application exactly as it was.

## Styling (Tailwind CSS)

The original Tailwind CSS styling is 100% preserved. 
During the conversion process, the React project was built to generate a compiled static CSS file (`index-CN8DBbIm.css`). 
This CSS file is located in your WordPress installation's root directory (`app/public/assets/index-CN8DBbIm.css`) and is loaded via a direct `<link>` tag within `header.php`.

## Assets & Images

To ensure all hardcoded image paths (e.g., `/images/logo.png`) from the React project continue to work flawlessly, the entire `images` directory was moved to the root of the WordPress installation (`app/public/images/`).

## Editing the Theme

- To edit the text, images, or layout of any specific section, simply open the corresponding file inside `template-parts/`.
- The theme does not require `npm run dev` or a Node.js server. It runs entirely on WordPress's PHP engine.
