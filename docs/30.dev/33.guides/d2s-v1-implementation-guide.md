# D2S v1 Implementation Guide
## Design-to-Static System Version 1.0

### 📋 Overview

D2S v1은 Figma 디자인을 Claude Code를 통해 정적 WordPress 템플릿으로 변환하는 서브 시스템입니다.

**핵심 원칙:**
- 🎨 **1 Design** = 1 PHP Template + 1 Custom CSS + 1 Custom JS
- 🔧 **공통 클래스 강제**: `d2s-common-v1.0.css` 클래스만 사용
- 🚫 **동적 콘텐츠 금지**: 모든 콘텐츠는 하드코딩
- 📁 **버전 관리**: v1 시스템으로 향후 업그레이드 경로 확보

---

## 🏗️ System Architecture

### File Structure
```
/wp-content/themes/generatepress_child/
│
├── includes/
│   └── gp-d2s-v1.php                    # D2S v1 System Integration
│
├── templates/                           # Page templates directory
│   └── page-{page-name}.php            # Page templates
│
├── d2s-v1/                              # D2S v1 시스템 루트
│   ├── common/
│   │   └── d2s-v1-common.css           # 공통 CSS (필수)
│   │
│   ├── pages/                           # 페이지별 디렉토리
│   │   ├── {page-name}/
│   │   │   ├── {page-name}.css         # 페이지 전용 CSS
│   │   │   ├── {page-name}.js          # 페이지 전용 JS
│   │   │   └── images/                 # 페이지 전용 이미지
│   │   │
│   │   └── about-us/                    # 예시
│   │       ├── about-us.css
│   │       ├── about-us.js
│   │       └── images/
│   │           └── team-photo.jpg
│   │
│   └── docs/
│       └── d2s-v1-implementation-guide.md
│
└── functions.php                        # Include gp-d2s-v1.php here
```

---

## ⚠️ CRITICAL RULES

### 1. **파일 네이밍 규칙**
- PHP: `page-{page-name}.php` (in `/templates/` directory)
- CSS: `{page-name}.css`
- JS: `{page-name}.js`
- Images: `/d2s-v1/pages/{page-name}/images/`

### 2. **클래스 네이밍 규칙**
- 공통 클래스: `d2s-` 프리픽스 필수
- 페이지 전용 클래스: `{page-name}-` 프리픽스 사용
- 예: `d2s-hero`, `about-us-team-grid`

### 3. **GeneratePress 구조 필수 유지**
```html
<div class="site grid-container container hfeed" id="page">
    <div class="site-content" id="content">
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- 콘텐츠 -->
                </article>
            </main>
        </div>
    </div>
</div>
```

---

## 📝 Required PHP Template Structure

```php
<?php
/**
 * Template Name: {Page Name}
 * Template Post Type: page
 * D2S Version: 1.0
 * Generated from: {Figma File/Page Name}
 *
 * @package GeneratePress
 * @subpackage D2S_v1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Remove sidebars (필수)
add_filter( 'generate_sidebar_layout', function() {
    return 'no-sidebar';
});

// Enqueue page-specific styles and scripts
add_action( 'wp_enqueue_scripts', function() {
    // Use GP D2S helper function
    gp_d2s_enqueue_page_assets('{page-name}', true); // true if has JS file
}, 20 );

get_header(); ?>

<div class="site grid-container container hfeed" id="page">
    <div class="site-content" id="content">
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                        <!-- D2S Content Start -->
                        <div class="inside-article">
                            
                            <!-- Hero Section (Optional) -->
                            <div class="d2s-hero" style="background-image: url('<?php gp_d2s_image_url('{page-name}', 'hero-bg.jpg'); ?>');">
                                <div class="d2s-hero-content">
                                    <h1 class="d2s-hero-title">Page Title</h1>
                                    <p class="d2s-hero-subtitle">Subtitle</p>
                                </div>
                            </div>
                            
                            <!-- Sections -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <!-- Section Content -->
                                    </div>
                                </div>
                            </section>
                            
                        </div>
                        <!-- D2S Content End -->
                        
                    </article>
                <?php endwhile; ?>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>
```

---

## 🎨 D2S v1 CSS Classes Reference

### Hero Classes
| Class | Purpose | Modifiers |
|-------|---------|-----------|
| `.d2s-hero` | Hero wrapper | `.no-overlay`, `.hero-tall`, `.hero-short` |
| `.d2s-hero-content` | Content container | - |
| `.d2s-hero-title` | Main title | - |
| `.d2s-hero-subtitle` | Subtitle | - |

### Section Classes
| Class | Purpose | GP Global Color |
|-------|---------|----------------|
| `.d2s-section` | Section wrapper | - |
| `.d2s-container` | Content container | - |
| `.bg-white` | White background | `--base-3` |
| `.bg-light-gray` | Light gray background | `--base-2` |
| `.bg-gray` | Gray background | `--base` |
| `.bg-dark` | Dark background | `--contrast` |

### GeneratePress Color Aliases
| Class | GP Color Variable | Typical Use |
|-------|-------------------|-------------|
| `.bg-base-3` | `--base-3` | Lightest background (white) |
| `.bg-base-2` | `--base-2` | Light background |
| `.bg-base` | `--base` | Dark background |
| `.bg-contrast` | `--contrast` | Darkest background |

### Section Modifiers
| Class | Purpose |
|-------|---------|
| `.section-large` | Larger padding |
| `.section-small` | Smaller padding |
| `.section-no-padding` | No padding |
| `.section-no-top` | No top padding |
| `.section-no-bottom` | No bottom padding |

### Grid System
| Class | Columns | Modifiers |
|-------|---------|-----------|
| `.d2s-grid` | Base grid | `.v-center`, `.v-start`, `.v-end` |
| `.d2s-grid-2` | 2 columns | `.grid-40-60`, `.grid-60-40`, `.grid-30-70`, `.grid-70-30` |
| `.d2s-grid-3` | 3 columns | - |
| `.d2s-grid-4` | 4 columns | - |

### Components
| Class | Purpose | Usage |
|-------|---------|--------|
| `.d2s-feature-box` | Feature card | Services, features |
| `.d2s-icon-box` | Icon container | With `.icon` child |
| `.d2s-cta-box` | CTA container | Call-to-action sections |
| `.d2s-card` | Generic card | Any boxed content |
| `.d2s-button-group` | Button container | `.align-left`, `.align-right` |

### Typography
| Class | Purpose | Size |
|-------|---------|------|
| `.d2s-heading` | Section heading | 2.5em (1.8em mobile) |
| `.d2s-subheading` | Sub heading | 1.8em (1.4em mobile) |
| `.d2s-lead` | Lead paragraph | 1.25em |
| `.d2s-text-large` | Large text | 1.125em |

### Utilities
| Class | Purpose |
|-------|---------|
| `.d2s-text-center` | Center align text |
| `.d2s-text-left` | Left align text |
| `.d2s-text-right` | Right align text |
| `.d2s-text-center-mobile` | Center on mobile only |
| `.d2s-mt-{0,20,40,60}` | Top margin |
| `.d2s-mb-{0,20,40,60}` | Bottom margin |
| `.d2s-max-{600,800,1000}` | Max width constraint |
| `.d2s-hide-mobile` | Hide on mobile |
| `.d2s-show-mobile` | Show only on mobile |

---

## 📋 Implementation Examples

### Example 1: Hero + 2 Column Section
```html
<!-- Hero -->
<div class="d2s-hero" style="background-image: url('path/to/hero.jpg');">
    <div class="d2s-hero-content">
        <h1 class="d2s-hero-title">Welcome to Our Company</h1>
        <p class="d2s-hero-subtitle">Creating amazing experiences since 2020</p>
    </div>
</div>

<!-- 2 Column Section -->
<section class="d2s-section bg-white">
    <div class="d2s-container">
        <div class="entry-content">
            <h2 class="d2s-heading d2s-text-center">About Us</h2>
            <div class="d2s-grid d2s-grid-2 v-center">
                <div>
                    <h3 class="d2s-subheading">Our Mission</h3>
                    <p>Content here...</p>
                </div>
                <div>
                    <img src="path/to/image.jpg" alt="About us">
                </div>
            </div>
        </div>
    </div>
</section>
```

### Example 2: Feature Grid
```html
<section class="d2s-section bg-light-gray">
    <div class="d2s-container">
        <div class="entry-content">
            <h2 class="d2s-heading d2s-text-center">Our Services</h2>
            <p class="d2s-lead d2s-text-center d2s-max-800">
                We offer comprehensive solutions for your business
            </p>
            <div class="d2s-grid d2s-grid-3 d2s-mt-40">
                <div class="d2s-feature-box">
                    <div class="d2s-icon-box">
                        <span class="icon">🚀</span>
                    </div>
                    <h3>Fast Delivery</h3>
                    <p>Quick and reliable service</p>
                </div>
                <div class="d2s-feature-box">
                    <div class="d2s-icon-box">
                        <span class="icon">💎</span>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>Best in class solutions</p>
                </div>
                <div class="d2s-feature-box">
                    <div class="d2s-icon-box">
                        <span class="icon">🛡️</span>
                    </div>
                    <h3>Secure & Safe</h3>
                    <p>Your data is protected</p>
                </div>
            </div>
        </div>
    </div>
</section>
```

### Example 3: CTA Section
```html
<section class="d2s-section bg-dark">
    <div class="d2s-container">
        <div class="entry-content">
            <div class="d2s-cta-box">
                <h2 class="d2s-heading">Ready to Get Started?</h2>
                <p class="d2s-lead">Join thousands of satisfied customers</p>
                <div class="d2s-button-group">
                    <a href="#" class="button">Get Started</a>
                    <a href="#" class="button button-outline">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
```

---

## 🔧 Page-Specific CSS Guidelines

### File: `{page-name}.css`
```css
/**
 * {Page Name} - D2S v1 Custom Styles
 * Version: 1.0.0
 */

/* Page-specific modifications only */
.page-template-templates-page-{page-name} {
    /* Custom styles here */
}

/* Use page prefix for custom classes */
.{page-name}-custom-element {
    /* Styles */
}

/* Extend D2S classes if needed */
.page-template-templates-page-{page-name} .d2s-hero {
    /* Page-specific hero modifications */
}
```

---

## ✅ Implementation Checklist

Before delivering a template, verify:

- [ ] **File Structure**
  - [ ] PHP template in correct location
  - [ ] Custom CSS file created
  - [ ] Custom JS file created (if needed)
  - [ ] Images in page folder

- [ ] **PHP Template**
  - [ ] Template Name header present
  - [ ] D2S Version documented
  - [ ] Sidebar removal filter added
  - [ ] CSS/JS enqueue code included
  - [ ] GeneratePress structure maintained

- [ ] **CSS Usage**
  - [ ] Only `d2s-` prefixed classes from common CSS
  - [ ] Page-specific classes use page prefix
  - [ ] No inline styles (except background images)
  - [ ] Responsive behavior verified

- [ ] **Content**
  - [ ] All content hardcoded
  - [ ] No dynamic fields (ACF, etc.)
  - [ ] Images use correct paths
  - [ ] Alt text for all images

---

## 🚫 Common Mistakes to Avoid

1. **Creating new utility classes** - Use only D2S common classes
2. **Forgetting page-specific CSS enqueue** - Must be in template file
3. **Using wrong file paths** - Check directory structure
4. **Missing responsive considerations** - Test all breakpoints
5. **Incorrect class naming** - Follow `d2s-` prefix convention
6. **Modifying GeneratePress structure** - Keep it intact
7. **Using dynamic content** - Everything must be hardcoded

---

## 📌 Quick Reference for Claude Code

```
Request Template:
"Create a D2S v1 template for [page name] with:
- Hero section with background image
- 3 content sections alternating white/gray
- Feature grid with 3 columns
- CTA section at bottom
Follow D2S v1 implementation guide strictly."
```

---

**D2S System Version**: 1.1  
**Guide Version**: 1.1.0  
**Last Updated**: 2025-01-18  
**Compatible**: GeneratePress 3.x, WordPress 6.x