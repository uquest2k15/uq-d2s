# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

WordPress development project for OnField (온필드) tax and accounting services website. The project consists of:
- **Custom Child Theme**: GeneratePress child theme with D2S v1 system for page templates
- **Must-Use Plugin**: OnField Site plugin for extended functionality
- **D2S v1 System**: Design-to-Static workflow converting Figma designs to WordPress templates

Client: GMG Tax & Accounting (GMG 지엠지 세무회계) firm's OnField service.

## Key Technologies

- WordPress 5.0+ (tested up to 6.4)
- PHP 7.2+
- GeneratePress parent theme
- GSAP v3.13 for animations
- Swiper.js for carousels
- jQuery (WordPress default)

## Development Commands

**Manual development workflow without build tools** - No npm, composer, or build commands required.

### Local Development Setup
```bash
# Copy theme to WordPress
cp -r src/themes/generatepress_child/ /wp-content/themes/

# Copy must-use plugin
cp -r src/mu-plugins/onfield-site/ /wp-content/mu-plugins/

# Activate child theme in WordPress admin
```

### Debugging Functions
Custom debug helpers in `functions.php`:
```php
error_log_print_r($data, $label)    // Log arrays/objects
error_log_var_dump($data, $label)   // Detailed variable dumps
error_log_backtrace($label)         // Debug call traces
```

## Architecture

### Repository Structure
```
/uq-d2s/
├── docs/
│   ├── 30.dev/                      # Development documentation
│   │   ├── 31.release-notes/       # Version release notes
│   │   ├── 32.specs/               # Technical specifications
│   │   └── 33.guides/              # Implementation guides
│   ├── 99.workspace/                # Working documents
│   │   ├── design-mockups/         # Figma to PNG exports
│   │   ├── figma-exports/          # Figma to HTML/CSS exports
│   │   └── page-template-builds/   # Page build requirements
│   └── 99.Archived/                 # Archived documentation
└── src/
    ├── mu-plugins/onfield-site/    # Must-use plugin
    └── themes/generatepress_child/  # Child theme
```

### D2S v1 System Architecture
The D2S (Design-to-Static) v1 system provides structured page template development:

```
/themes/generatepress_child/
├── includes/
│   └── gp-d2s-v1.php              # D2S v1 core integration
├── templates/                      # Page templates directory
│   └── page-{page-name}.php       # Custom page templates
├── d2s-v1/                         # D2S v1 assets
│   ├── common/
│   │   └── d2s-v1-common.css      # Common utility classes
│   └── pages/{page-name}/
│       ├── {page-name}.css        # Page-specific styles
│       ├── {page-name}.js         # Page-specific JavaScript
│       └── images/                # Page-specific images
```

## D2S v1 Development

### Creating New Page Templates
1. Create template file: `/templates/page-{page-name}.php`
2. Add template header:
   ```php
   /**
    * Template Name: {Page Name}
    * Template Post Type: page
    * D2S Version: 1.0
    */
   ```
3. Remove sidebars: `add_filter('generate_sidebar_layout', function() { return 'no-sidebar'; });`
4. Enqueue assets: `gp_d2s_enqueue_page_assets('{page-name}', true);`
5. Create page assets in `/d2s-v1/pages/{page-name}/`

### Asset Management Functions
```php
// Enqueue page-specific assets
gp_d2s_enqueue_page_assets('{page-name}', $has_js);

// Get image URL with cache busting
gp_d2s_image_url('{page-name}', 'filename.jpg');
```

### CSS Guidelines
- Use BEM naming: `.d2s-{page}__element--modifier`
- GeneratePress color variables only:
  - `--contrast`: Primary text
  - `--contrast-2`: Secondary text
  - `--contrast-3`: Light text/borders
  - `--base`: Dark background
  - `--base-2`: Medium background
  - `--base-3`: White/light background
  - `--accent`: Brand color
- Image paths: `url('./images/filename.jpg')`

### JavaScript Guidelines
- Initialize with: `jQuery(document).ready(function($) { ... });`
- GSAP animations use ScrollTrigger for scroll effects
- Libraries located in `/assets/js/`

## Critical Reference Sources

When working on page templates, incorporate these documents:

### Page-Specific Requirements
For page `{page-name}`, check:
1. `/docs/99.workspace/page-template-builds/{page-name}/page-requirements.md` - Build specifications
2. `/docs/99.workspace/page-template-builds/{page-name}/post-deploy-review-*.md` - Previous deployment reviews
3. `/docs/99.workspace/page-template-builds/{page-name}/changelog.md` - Change history

### Design Specifications (Priority Order)
1. **Figma Exports**: `/docs/99.workspace/figma-exports/{page-name}/` - HTML/CSS to convert
2. **Design Mockups**: `/docs/99.workspace/design-mockups/{page-name}.png` - Visual reference
3. **Page Requirements**: Documentation of specific requirements

### D2S v1 Documentation
- `/docs/30.dev/33.guides/d2s-v1-quick-setup.md` - Setup guide
- `/docs/30.dev/33.guides/d2s-v1-implementation-guide.md` - Full implementation details
- `/docs/30.dev/33.guides/d2s-v1-gp-global-colors-guide.md` - Color system
- `/docs/30.dev/32.specs/d2s-v1-final-file-structure.md` - File structure specification

## WordPress Development Patterns

### Template Hierarchy
- `front-page.php` - Static homepage
- `templates/page-*.php` - Custom page templates (auto-discovered)
- Standard WordPress template files as needed

### Common Hooks
```php
// Remove GeneratePress elements
add_action('wp', 'onfield_remove_page_elements');
add_filter('generate_show_title', '__return_false');

// Asset loading with priority
add_action('wp_enqueue_scripts', 'gp_d2s_enqueue_assets', 15);

// Custom sections
add_action('generate_before_main_content', 'render_hero_section');
```

### GeneratePress Structure Requirements
Maintain this HTML structure in templates:
```html
<div class="site grid-container container hfeed" id="page">
    <div class="site-content" id="content">
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- Content here -->
                </article>
            </main>
        </div>
    </div>
</div>
```

## Important Notes

1. **Pixel-Perfect Implementation**: Priority is exact Figma-to-WordPress conversion
2. **No Build Process**: All assets are manually managed without compilation
3. **Korean Language**: Primary content language with UTF-8 encoding
4. **Version Management**: Use `filemtime()` for cache busting
5. **Mobile First**: Test responsive behavior on all devices
6. **Common Classes**: Use `d2s-v1-common.css` classes whenever possible