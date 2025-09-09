# GeneratePress Global Colors Guide for D2S v1

## 📎 GeneratePress Color System

GeneratePress provides 7 global colors with specific purposes:

| Variable | Name | Purpose | Default | D2S Usage |
|----------|------|---------|---------|-----------|
| `--contrast` | Contrast | Strongest text color | #222222 | Dark backgrounds, main text |
| `--contrast-2` | Contrast 2 | Lighter text color | #575760 | Secondary text |
| `--contrast-3` | Contrast 3 | Lightest text/borders | #b2b2be | Borders, disabled states |
| `--base` | Base | Dark background | #e8e8e8 | Gray section background |
| `--base-2` | Base 2 | Lighter background | #f7f8f9 | Light gray sections |
| `--base-3` | Base 3 | Lightest background | #ffffff | White sections |
| `--accent` | Accent | Main branding color | #0073aa | Links, buttons, icons |

## 🎨 D2S v1 Background Classes

### Primary Classes (Recommended)
```html
<!-- White background -->
<section class="d2s-section bg-white">...</section>  <!-- Uses --base-3 -->

<!-- Light gray background -->
<section class="d2s-section bg-light-gray">...</section>  <!-- Uses --base-2 -->

<!-- Gray background -->
<section class="d2s-section bg-gray">...</section>  <!-- Uses --base -->

<!-- Dark background -->
<section class="d2s-section bg-dark">...</section>  <!-- Uses --contrast -->
```

### Alternative Classes (Direct GP Names)
```html
<section class="d2s-section bg-base-3">...</section>  <!-- White -->
<section class="d2s-section bg-base-2">...</section>  <!-- Light gray -->
<section class="d2s-section bg-base">...</section>    <!-- Gray -->
<section class="d2s-section bg-contrast">...</section> <!-- Dark -->
```

## 📐 Common Patterns

### Pattern 1: Classic Alternating
```html
<section class="d2s-section bg-white">...</section>
<section class="d2s-section bg-light-gray">...</section>
<section class="d2s-section bg-white">...</section>
<section class="d2s-section bg-light-gray">...</section>
<section class="d2s-section bg-dark"><!-- CTA --></section>
```

### Pattern 2: Progressive Darkening
```html
<section class="d2s-section bg-white">...</section>
<section class="d2s-section bg-light-gray">...</section>
<section class="d2s-section bg-gray">...</section>
<section class="d2s-section bg-dark"><!-- CTA --></section>
```

### Pattern 3: Feature Emphasis
```html
<section class="d2s-section bg-white">...</section>
<section class="d2s-section bg-light-gray">
    <!-- Feature boxes automatically get white (base-3) background -->
    <div class="d2s-feature-box">...</div>
</section>
<section class="d2s-section bg-white">...</section>
```

## 🔧 Component Behavior

### Feature Boxes
- On `bg-light-gray`: Feature box gets white (`--base-3`) background
- On `bg-gray`: Feature box gets light gray (`--base-2`) background
- On `bg-white`: Feature box gets subtle transparent background

### Text Colors
- Light backgrounds (`bg-white`, `bg-light-gray`, `bg-gray`): Text uses `--contrast`
- Dark backgrounds (`bg-dark`, `bg-contrast`): Text uses `--base-3`

### Links & Accents
- Always use `--accent` for interactive elements
- Hover states can use CSS filters or opacity

## ⚙️ Customizer Settings

To change colors, go to:
**Appearance > Customize > Colors > Global Colors**

Each color can be customized to match your brand while maintaining the semantic relationships.

## 📝 Quick Reference

```css
/* Background hierarchy */
--base-3    /* Lightest (white) */
--base-2    /* Light gray */
--base      /* Gray */
--contrast  /* Dark */

/* Text hierarchy */
--contrast    /* Main text */
--contrast-2  /* Secondary text */
--contrast-3  /* Tertiary text */

/* Interactive */
--accent      /* Links, buttons */
```

## ✅ Best Practices

1. **Maintain Contrast**: Always ensure sufficient contrast between background and text
2. **Consistent Patterns**: Use consistent section color patterns throughout the site
3. **Semantic Usage**: Use colors based on their semantic meaning, not appearance
4. **Test Changes**: When customizing colors, test all sections and components

---

**Note**: The D2S system automatically handles color relationships. Just use the appropriate background class, and text colors will adjust accordingly.