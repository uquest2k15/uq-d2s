# D2S v1 Changelog

## [1.1.0] - 2025-01-18

### 🔄 Changed - Architecture Improvements
- **File Naming Simplified**:
  - `d2s-common-v1.0.css` → `d2s-v1-common.css`
  - `{page-name}-v1.css` → `{page-name}.css`
  - `{page-name}-v1.js` → `{page-name}.js`
  - Removed version numbers from filenames (use Git for version control)

- **Directory Structure**:
  - Page templates moved from root to `/templates/` directory
  - WordPress now automatically discovers templates in `/templates/`
  - Cleaner child theme root directory

- **Image Organization**:
  - Documented page-specific images location: `/d2s-v1/pages/{page-name}/images/`
  - Clear separation between page and theme images

### 🔧 Fixed
- **CSS Loading Issue**: Removed non-existent `generate-colors` dependency
- **Template Detection**: Updated to support templates in new `/templates/` directory

### 📚 Updated
- **Documentation**: Updated all file structure documentation
- **PHP Functions**: Modified to support new file naming convention

### 🚀 Migration Notes
For existing projects:
1. Rename CSS/JS files to remove `-v1` suffix
2. Move page templates to `/templates/` directory
3. Update any hardcoded file references

---

## [1.0.1] - 2024-12-20

### 🔧 Fixed
- **GeneratePress Global Colors**: Corrected color mappings to match GP's official color system
  - `--base-3` = Lightest background (white)
  - `--base-2` = Lighter background
  - `--base` = Dark background
  - `--contrast` = Text color
- **Background Classes**: Updated all background classes to use correct GP variables
- **Component Styling**: Fixed feature boxes and cards to use proper color hierarchy

### 📚 Added
- **Color Guide**: New `d2s-v1-gp-colors-guide.md` for GeneratePress color reference
- **PHP Integration**: Moved all D2S code to `/includes/gp-d2s-v1.php`
- **Helper Functions**: Added `gp_` prefix to all functions

### 🔄 Changed
- **File Structure**: PHP code now in `/includes/` instead of functions.php
- **CSS Classes**: Improved semantic naming with GP color system
- **Documentation**: Updated all guides with correct color information

---

## [1.0.0] - 2024-12-20

### 🎉 Initial Release

#### Core Features
- **Design-to-Static System**: Figma → Claude Code → WordPress workflow established
- **Version Control**: v1 system architecture with clear upgrade path
- **File Structure**: Organized directory structure for scalability

#### CSS Framework (`d2s-common-v1.0.css`)
- **Hero System**: Flexible hero sections with overlay options
- **Section System**: Full-width sections with multiple background options
- **Grid System**: 2, 3, and 4 column responsive grids with asymmetric options
- **Components**: Feature boxes, CTA boxes, cards, icon boxes
- **Typography**: Consistent heading and text styles
- **Utilities**: Spacing, alignment, visibility helpers

#### PHP Integration
- **Template Structure**: Standardized PHP template format
- **Asset Loading**: Automated CSS/JS enqueueing system
- **Helper Functions**: Image URLs, template detection, asset loading
- **Body Classes**: Automatic D2S class injection

#### Documentation
- **Implementation Guide**: Comprehensive guide for Claude Code
- **Quick Setup Guide**: Fast-track setup instructions
- **CSS Reference**: Complete class documentation
- **Examples**: Real-world implementation patterns

### Technical Specifications
- **GeneratePress**: 3.x compatible
- **WordPress**: 6.x compatible
- **PHP**: 7.4+ required
- **CSS**: Modern CSS with CSS Variables
- **Responsive**: Mobile-first approach

### File Structure
```
d2s-v1/
├── common/
│   └── d2s-common-v1.0.css
├── pages/
│   └── {page-name}/
│       ├── page-{page-name}.php
│       ├── {page-name}-v1.css
│       ├── {page-name}-v1.js
│       └── images/
└── docs/
    ├── d2s-v1-implementation-guide.md
    ├── d2s-v1-quick-setup.md
    └── d2s-v1-changelog.md
```

### Known Limitations
- No dynamic content support (by design)
- Single language support
- No RTL support (planned for v1.1)

---

## Upgrade Path

### From D2S v1 to v2 (Future)
When D2S v2 is released:
1. Both versions can run simultaneously
2. Pages can be migrated individually
3. No breaking changes to v1 templates
4. Gradual transition supported

---

## Version Numbering

- **Major**: System architecture changes (1.x.x)
- **Minor**: New features, components (x.1.x)
- **Patch**: Bug fixes, minor improvements (x.x.1)

---

**Current Version**: 1.1.0  
**Release Date**: 2025-01-18  
**Status**: Stable