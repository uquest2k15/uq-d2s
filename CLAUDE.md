# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a WordPress theme and plugin development project for the OnField (온필드) tax and accounting services website. The project consists of:
- Custom WordPress plugin: `onfield-site` (must-use plugin)
- Child theme: `generatepress_child` extending the GeneratePress parent theme
- Figma design exports and mockups for various service pages
- D2S v1 (Design-to-Static System Version 1.1) for structured template development

## Key Technologies

- WordPress (5.0+, tested up to 6.4)
- PHP 7.2+
- GeneratePress theme framework
- GSAP v3.13 for animations
- Swiper.js for carousels
- jQuery for DOM manipulation

## Development Commands

This project uses manual development workflow without build tools. Common tasks:

### Local Development
- Place `src/mu-plugins/onfield-site/` in WordPress `/wp-content/mu-plugins/`
- Place `src/themes/generatepress_child/` in WordPress `/wp-content/themes/`
- Activate the child theme in WordPress admin

### Debugging
The theme includes custom debugging functions in `src/themes/generatepress_child/functions.php`:
- `error_log_print_r($data, $label)` - Log arrays/objects
- `error_log_var_dump($data, $label)` - Detailed variable dumps
- `error_log_backtrace($label)` - Debug call traces

## Architecture & Code Structure

### Plugin Architecture (`onfield-site`)
- Main file: `onfield-site.php`
- Follows WordPress plugin best practices
- Uses OOP with namespacing
- Includes security checks (`ABSPATH` defined)

### Theme Architecture (`generatepress_child`)
- Extends GeneratePress parent theme
- Modular includes:
  - `includes/gp-blog.php` - Blog functionality
  - `includes/gp-customize.php` - Theme customizations
  - `includes/uq-blog-core-cld.php` - Blog core library
  - `includes/gp-d2s-v1.php` - D2S v1 System integration
- CSS organized by component (about-us.css, gp-blog.css, onfield-front.css)
- JavaScript files with vendor libraries separated

### D2S v1.1 System Structure (Updated 2025-01-18)
```
/wp-content/themes/generatepress_child/
├── templates/                      # Page templates directory
│   └── page-{page-name}.php       # D2S page templates
├── d2s-v1/
│   ├── common/
│   │   └── d2s-v1-common.css      # Common utility classes
│   └── pages/
│       └── {page-name}/
│           ├── {page-name}.css     # Page-specific styles (no -v1 suffix)
│           ├── {page-name}.js      # Page-specific JavaScript (no -v1 suffix)
│           └── images/             # Page-specific images
```

### Design Implementation Pattern
1. Figma designs exported to HTML/CSS templates (in `docs/figma-exports/`)
2. Templates adapted into WordPress theme files
3. Common patterns:
   - Full-width sections with `.full-width-section`
   - Grid containers with `.grid-container`
   - Hero sections with background images
   - Service cards with hover effects
   - Tab-based content organization

## Important Considerations

1. **No Build Process**: Assets are manually managed. CSS/JS files are directly edited without compilation.

2. **Asset Versioning**: Uses `filemtime()` for cache busting in production.

3. **Multilingual**: Primary language is Korean. Content includes Korean text and business terminology.

4. **Business Context**: Website for GMG Tax & Accounting (GMG 지엠지 세무회계) firm's OnField service, offering tax consulting, bookkeeping, and audit support.

5. **Design Resources**: Check `docs/` directory for mockups and design specifications before implementing new features.

6. **WordPress Standards**: Follow WordPress coding standards for PHP, use proper hooks/filters, and maintain security best practices.

## D2S v1 Development Guide

### Creating New Page Templates
1. Create template file in `/templates/page-{slug}.php` with header:
   ```php
   /**
    * Template Name: {Page Name}
    * D2S v1 Template - Page: {page-name}
    */
   ```
2. Remove sidebars: `add_filter('generate_sidebar_layout', function() { return 'no-sidebar'; });`
3. Enqueue assets: `gp_d2s_enqueue_page_assets('{page-name}', true);` (true if has JS)
4. Create page assets in `/d2s-v1/pages/{page-name}/`:
   - `{page-name}.css`
   - `{page-name}.js` (optional)
   - `images/` directory for page-specific images

### CSS Guidelines
- Use D2S common classes from `d2s-v1-common.css`
- BEM naming for custom classes: `.d2s-{page}__element--modifier`
- GeneratePress global colors only (no hardcoded colors)
- Image paths: `url('./images/filename.jpg')` for page-specific images

### JavaScript Guidelines
- Use jQuery (already loaded by WordPress)
- Initialize with: `jQuery(document).ready(function($) { ... });`
- GSAP animations should use ScrollTrigger for scroll-based effects
- Number counters use Waypoints library

### GeneratePress Global Colors
- `--contrast`: Darkest color (text)
- `--contrast-2`: Medium text color
- `--contrast-3`: Light text/borders
- `--base`: Dark background
- `--base-2`: Medium background  
- `--base-3`: Light background (white)
- `--accent`: Primary brand color

### Image Organization
- Page-specific: `/d2s-v1/pages/{page-name}/images/`
- Theme-wide: `/assets/images/`
- Use helper function: `gp_d2s_image_url('{page-name}', 'filename.jpg')`

## Common Development Tasks

### Adding a New Service Page
1. Create publishing instruction in `docs/publish-instruction/{page-name}.md`
2. Use D2S v1 system to generate template files
3. Follow the 13-section pattern if applicable (hero, intro, stats, services, etc.)
4. Test animations and responsive behavior

### Updating Existing Templates
1. Check if page uses D2S v1 system (look for `D2S v1 Template` comment)
2. Edit files in appropriate locations per structure above
3. Clear WordPress cache after CSS/JS changes
4. Test on mobile devices for responsive issues

# List of Required Reference Sources
- Incorporate these files as core context before executing any task
- @docs/reference-sources-list.md
