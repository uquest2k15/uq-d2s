# D2S v1 Final File Structure

## 📁 Complete Directory Structure

```
/wp-content/themes/generatepress_child/
│
├── 📄 style.css                         # Child theme stylesheet
├── 📄 functions.php                     # Include gp-d2s-v1.php here
│
├── 📁 includes/                         # PHP includes directory
│   └── 📄 gp-d2s-v1.php                # D2S v1 System Integration
│
├── 📁 templates/                        # Page templates directory
│   ├── 📄 page-{page-name}.php         # D2S page templates
│   ├── 📄 page-tax-consulting.php      # Example template
│   └── 📄 page-about-us.php            # Example template
│
├── 📁 d2s-v1/                          # D2S v1 System Root
│   │
│   ├── 📁 common/                      # Common resources
│   │   └── 📄 d2s-v1-common.css       # Common CSS classes
│   │
│   ├── 📁 pages/                       # Page-specific resources
│   │   └── 📁 {page-name}/            # Each page has its own folder
│   │       ├── 📄 {page-name}.css     # Page-specific CSS
│   │       ├── 📄 {page-name}.js      # Page-specific JS (optional)
│   │       └── 📁 images/             # Page-specific images
│   │           ├── hero-bg.jpg
│   │           ├── section-bg.webp
│   │           └── icons/*.svg
│   │
│   └── 📁 docs/                        # Documentation
│       ├── 📄 d2s-v1-implementation-guide.md
│       ├── 📄 d2s-v1-quick-setup.md
│       └── 📄 d2s-v1-changelog.md
│
└── 📁 assets/                          # Theme general assets
    └── 📁 images/                      # Theme-wide images
        └── sections/                   # Section background images
```

## 🎨 Key Architecture Changes (v1.0 → v1.1)

### File Naming Changes
- **Common CSS**: `d2s-common-v1.0.css` → `d2s-v1-common.css`
- **Page CSS**: `{page-name}-v1.css` → `{page-name}.css`
- **Page JS**: `{page-name}-v1.js` → `{page-name}.js`

### Directory Structure Changes
- **Page Templates**: Moved from root to `/templates/` directory
- **Image Assets**: Each page has its own `/images/` subdirectory

## 📸 Image Asset Organization

### Page-Specific Images
Located in: `/d2s-v1/pages/{page-name}/images/`
- Hero backgrounds
- Section backgrounds
- Icons and graphics specific to that page
- Any images referenced in the page's CSS/JS

### Theme-Wide Images
Located in: `/assets/images/`
- Shared backgrounds
- Common icons
- Logo variations

### Image Path Examples
```css
/* In page CSS (e.g., tax-consulting.css) */
.hero {
    background-image: url('./images/hero-bg.webp');
}

/* For theme-wide images */
.section {
    background-image: url('../../../assets/images/sections/common-bg.webp');
}
```

## 🎨 Key Features

### GeneratePress Global Colors Integration
- Uses GP's color system: `--base`, `--base-2`, `--base-3`, `--contrast`
- No hardcoded colors in CSS
- Consistent with theme customizer settings

### Centralized PHP Management
- All D2S PHP code in `/includes/gp-d2s-v1.php`
- Single line include in functions.php
- Helper functions with `gp_` prefix

### Version Control
- System version: v1
- No version numbers in filenames
- Clear upgrade path to v2

## 📝 File Purposes

| File/Directory | Purpose |
|----------------|---------|
| `/includes/gp-d2s-v1.php` | All D2S system PHP functionality |
| `/templates/` | Page template files organized separately |
| `/d2s-v1/common/` | Shared CSS classes for all templates |
| `/d2s-v1/pages/{name}/` | Page-specific assets (CSS, JS, images) |
| `/d2s-v1/pages/{name}/images/` | Page-specific image assets |

## 🚀 Quick Setup Summary

1. **Create directories**: 
   - `/includes/`
   - `/templates/`
   - `/d2s-v1/`
   - `/d2s-v1/common/`
   - `/d2s-v1/pages/`

2. **Add system files**: 
   - `gp-d2s-v1.php` → `/includes/`
   - `d2s-v1-common.css` → `/d2s-v1/common/`

3. **Update functions.php**: 
   ```php
   require_once get_stylesheet_directory() . '/includes/gp-d2s-v1.php';
   ```

4. **Create page template in `/templates/`**:
   ```php
   <?php
   /**
    * Template Name: Your Page Name
    */
   ```

5. **Create page assets**:
   - `/d2s-v1/pages/{page-name}/{page-name}.css`
   - `/d2s-v1/pages/{page-name}/{page-name}.js`
   - `/d2s-v1/pages/{page-name}/images/`

## ✅ Benefits

- **Clean separation**: PHP logic, templates, and assets organized
- **Easy maintenance**: Consistent file naming without version suffixes
- **Theme updates safe**: Child theme structure preserved
- **Color consistency**: Uses GeneratePress global colors
- **Image organization**: Clear separation between page and theme images
- **Template organization**: All page templates in dedicated directory

---

**System**: D2S v1  
**Version**: 1.1.0  
**Compatible**: GeneratePress 3.x, WordPress 6.x  
**Updated**: 2025-01-18