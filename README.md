# DD Astra Child Theme

A custom child theme for Astra with Daydream Project branding and colors.

## Description

This child theme extends the Astra theme with custom Daydream Project colors and styling. It provides a clean, professional color palette that can be used throughout your WordPress site and in the Gutenberg editor.

## Features

- ✅ **Custom Color Palette**: 9 carefully selected Daydream Project colors
- ✅ **Gutenberg Editor Support**: Colors available in block editor
- ✅ **Global Styles Integration**: Colors work with WordPress Global Styles
- ✅ **CSS Variables**: Easy to use in custom styling
- ✅ **Clean Code**: Optimized with anonymous functions
- ✅ **Version Control**: Complete git history and GitHub integration

## Color Palette

| Color Name | Hex Value | Slug | Usage |
|------------|-----------|------|-------|
| Brand | #00A0DF | `brand` | Primary brand color |
| Alt Brand | #EF4DAE | `alt-brand` | Secondary brand color |
| Heading | #1A1A1A | `heading` | Headings and titles |
| Text | #333333 | `text` | Body text |
| Primary | #0074A3 | `primary` | Primary actions |
| Secondary | #5E6A71 | `secondary` | Secondary elements |
| Border | #E2E8F0 | `border` | Borders and dividers |
| Subtle BG | #F7FAFC | `subtle-bg` | Subtle backgrounds |
| Extra | #0E1A20 | `extra` | Dark accents |

## Installation

1. **Download the theme**:
   ```bash
   git clone https://github.com/c4ss4ndr4/dd-astra-child.git
   ```

2. **Upload to WordPress**:
   - Upload the `dd-astra-child` folder to `/wp-content/themes/`
   - Or use WordPress admin: Appearance → Themes → Add New → Upload Theme

3. **Activate the theme**:
   - Go to Appearance → Themes
   - Activate "DD Astra Child"

## Usage

### In Gutenberg Editor

The Daydream Project colors are automatically available in the block editor:

1. Add any block (paragraph, heading, etc.)
2. Click on the color picker
3. Select from the Daydream Project color palette

### In Global Styles

1. Go to **Appearance → Editor → Styles**
2. Navigate to **Colors**
3. Use the Daydream Project color palette

### CSS Variables

You can use the CSS variables in your custom CSS:

```css
.my-custom-element {
    background-color: var(--brand);
    color: var(--heading);
    border: 1px solid var(--border);
}
```

## File Structure

```
dd-astra-child/
├── functions.php          # Theme functions and color palette
├── style.css             # Child theme styles and CSS variables
├── theme.json            # WordPress theme.json configuration
└── README.md             # This documentation
```

## Requirements

- **Parent Theme**: Astra theme (latest version recommended)
- **WordPress**: 5.9+ (for theme.json support)
- **PHP**: 7.4+

## Development

### Git History

The repository contains a complete development history:

- `1afbcfc` - Initial commit: Working DD Astra Child theme with Daydream colors
- `bcb08a0` - Added Daydream colors to theme.json and improved Gutenberg support  
- `78a5c8b` - Simplified: Use clean anonymous functions for child theme
- `e4e66e3` - Final: Clean theme.json with version 3 and proper color settings

### Making Changes

1. Make your changes to the theme files
2. Test thoroughly
3. Commit your changes:
   ```bash
   git add .
   git commit -m "Description of changes"
   git push
   ```

## Customization

### Adding New Colors

To add new colors, update both `functions.php` and `theme.json`:

**functions.php**:
```php
array( 'name' => 'New Color', 'slug' => 'new-color', 'color' => '#HEXCODE' )
```

**theme.json**:
```json
{ "slug": "new-color", "color": "#HEXCODE", "name": "New Color" }
```

### Custom CSS

Add your custom styles to `style.css` after the existing CSS variables section.

## Support

- **GitHub Issues**: [Create an issue](https://github.com/c4ss4ndr4/dd-astra-child/issues)
- **Astra Documentation**: [Astra Theme Docs](https://wpastra.com/docs/)

## License

This child theme is licensed under GPL v2 or later, same as the Astra parent theme.

## Credits

- **Parent Theme**: [Astra](https://wpastra.com/) by Brainstorm Force
- **Developer**: Cassandra Marshall
- **Project**: Daydream Project

---

**Version**: 1.0.0  
**Last Updated**: October 2025
