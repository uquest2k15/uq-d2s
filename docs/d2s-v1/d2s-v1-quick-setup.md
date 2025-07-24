# D2S v1 Quick Setup Guide

## 🚀 Initial Setup (One-time Only)

### Step 1: Create Directory Structure
```bash
/wp-content/themes/generatepress_child/
├── includes/
│   └── gp-d2s-v1.php
├── d2s-v1/
│   ├── common/
│   └── pages/
```

### Step 2: Upload System Files
1. Place `gp-d2s-v1.php` in `/includes/`
2. Place `d2s-common-v1.0.css` in `/d2s-v1/common/`

### Step 3: Update functions.php
Add this single line to your child theme's functions.php:
```php
// Load D2S v1 System
require_once get_stylesheet_directory() . '/includes/gp-d2s-v1.php';
```

### Step 4: Verify GeneratePress Global Colors
Ensure your GeneratePress Customizer has these colors set:
- **Contrast** (--contrast): Strongest text color (#222222)
- **Contrast 2** (--contrast-2): Lighter text color (#575760)
- **Contrast 3** (--contrast-3): Lightest text/border color (#b2b2be)
- **Base** (--base): Dark background (#e8e8e8)
- **Base 2** (--base-2): Lighter background (#f7f8f9)
- **Base 3** (--base-3): Lightest background/white (#ffffff)
- **Accent** (--accent): Main branding color (#0073aa)

---

## 📝 Creating New Page Templates

### Step 1: Request to Claude Code
```
"Create a D2S v1 template for 'services' page:
- Use d2s-v1-implementation-guide.md
- Hero with title 'Our Services'
- 3-column service grid
- CTA section
- Alternating white/gray sections"
```

### Step 2: Create Page Directory
```
/d2s-v1/pages/services/
├── page-services.php
├── services-v1.css
├── services-v1.js
└── images/
    └── hero-bg.jpg
```

### Step 3: Move Template File
Move `page-services.php` to child theme root:
```
/wp-content/themes/generatepress_child/page-services.php
```

### Step 4: Create WordPress Page
1. WordPress Admin → Pages → Add New
2. Page title: "Services"
3. Page Attributes → Template → Select "Services" (or template name)
4. Publish

---

## 🎨 D2S v1 Section Templates

### Basic Hero
```html
<div class="d2s-hero" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/pages/{page}/images/hero.jpg');">
    <div class="d2s-hero-content">
        <h1 class="d2s-hero-title">Title</h1>
        <p class="d2s-hero-subtitle">Subtitle</p>
    </div>
</div>
```

### Content Section
```html
<section class="d2s-section bg-white">
    <div class="d2s-container">
        <div class="entry-content">
            <h2 class="d2s-heading">Section Title</h2>
            <p>Content...</p>
        </div>
    </div>
</section>
```

### 3-Column Grid
```html
<section class="d2s-section bg-light-gray">
    <div class="d2s-container">
        <div class="entry-content">
            <h2 class="d2s-heading d2s-text-center">Title</h2>
            <div class="d2s-grid d2s-grid-3 d2s-mt-40">
                <div class="d2s-feature-box">
                    <h3>Feature 1</h3>
                    <p>Description</p>
                </div>
                <div class="d2s-feature-box">
                    <h3>Feature 2</h3>
                    <p>Description</p>
                </div>
                <div class="d2s-feature-box">
                    <h3>Feature 3</h3>
                    <p>Description</p>
                </div>
            </div>
        </div>
    </div>
</section>
```

### CTA Section
```html
<section class="d2s-section bg-dark">
    <div class="d2s-container">
        <div class="entry-content">
            <div class="d2s-cta-box">
                <h2 class="d2s-heading">CTA Title</h2>
                <p class="d2s-lead">Description</p>
                <div class="d2s-button-group">
                    <a href="#" class="button">Primary Action</a>
                    <a href="#" class="button button-outline">Secondary</a>
                </div>
            </div>
        </div>
    </div>
</section>
```

---

## 📋 Common Page Patterns

### Landing Page Structure
```
1. Hero (full-width image)
2. Intro Section (white/base-3)
3. Features Grid (light-gray/base-2)
4. About Section (white/base-3)
5. Testimonials (light-gray/base-2)
6. CTA Section (dark/contrast)
```

### Service Page Structure
```
1. Hero (with subtitle)
2. Services Grid (white/base-3)
3. Process Section (light-gray/base-2)
4. Benefits (white/base-3)
5. CTA (dark/contrast)
```

### About Page Structure
```
1. Hero
2. Company Story (white/base-3)
3. Mission/Vision (light-gray/base-2)
4. Team Grid (white/base-3)
5. CTA (light-gray/base-2)
```

---

## 🔧 Troubleshooting

### CSS Not Loading
```php
// Debug in template file
echo '<!-- CSS Path: ' . get_stylesheet_directory_uri() . '/d2s-v1/common/d2s-common-v1.0.css -->';
```

### Template Not Appearing
Check template header:
```php
/**
 * Template Name: Your Template Name
 * Template Post Type: page
 */
```

### Layout Issues
1. Check GeneratePress structure
2. Verify `d2s-v1-template` body class
3. Clear cache

### Image Paths
Always use:
```php
<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/pages/{page-name}/images/
```

---

## 📌 Quick Commands

### Check D2S Version
Add to any template:
```php
<!-- D2S Version: 1.0 -->
```

### List All D2S Templates
```php
// Add to functions.php temporarily
add_action('admin_notices', function() {
    $templates = wp_get_theme()->get_page_templates();
    echo '<pre>D2S Templates: ';
    foreach($templates as $file => $name) {
        if(strpos($file, 'page-') === 0) {
            echo "\n - $name ($file)";
        }
    }
    echo '</pre>';
});
```

---

## 🎯 Best Practices

1. **Image Optimization**
   - Hero images: 1920x600px max
   - Feature images: 800x600px max
   - Use WebP format when possible

2. **Section Order**
   - Alternate backgrounds (white → gray → white)
   - Max 6-8 sections per page
   - Always end with CTA

3. **Typography**
   - One `d2s-heading` per section
   - Use `d2s-lead` for important intros
   - Keep paragraphs under 4 lines

4. **Mobile First**
   - Test on 375px width
   - Check grid collapse
   - Verify touch targets

---

## 📚 Resources

- **Main Guide**: `d2s-v1-implementation-guide.md`
- **CSS Reference**: Check CSS file comments
- **GeneratePress Docs**: [docs.generatepress.com](https://docs.generatepress.com)

---

**Quick Start Checklist**:
- [ ] D2S v1 folder structure created
- [ ] Common CSS uploaded
- [ ] functions.php updated
- [ ] First template created
- [ ] WordPress page using template

**Version**: 1.0.0  
**System**: D2S v1  
**Updated**: 2024