# Icons Block WordPress Plugin

## Description

**Icons Block** is a WordPress plugin designed to import and manage libraries of SVG icon files, allowing you to use and customize icons in your WordPress site. It supports different icon styles (such as outline, solid, etc.) and provides a user-friendly block for the WordPress Block Editor (Gutenberg).

- **SVG Library Support:** Import collections of SVG icons organized by type (e.g., outline, solid).
- **Customizable:** Icons can inherit text color, font size, and other styles from your theme or the WordPress Site Editor.
- **Block Editor Integration:** Easily select, preview, and insert icons into your content using a custom block.
- **Type Switching:** Seamlessly switch between icon styles (outline, solid, etc.) if the same icon exists in multiple styles.
- **No Default Icon:** When inserting the block, no icon is selected by default, allowing you to choose the icon you want.
- **GPL Licensed:** Distributed under the GNU General Public License v2 or later.

## Installation

1. Copy the plugin folder to your `wp-content/plugins/` directory.
2. Activate the plugin from the WordPress admin dashboard.
3. Add the "Icons" block to your posts or pages using the Block Editor.

## Usage

- Insert the block and select an icon from your imported SVG library.
- Switch between available icon types/styles using the radio selector.
- Customize icon color, size, and background using the Site Editor or block settings.

## Generating the React Icons File

To generate the React icon components from your SVG files, run the provided Node.js script:

```
node generate-icons.js
```

This will scan the `icons/` directory for SVG files and generate the `src/icons.react.js` file, which is used by the block. Make sure your SVGs are organized by type (e.g., `icons/outline/`, `icons/solid/`).

## License

This plugin is licensed under the [GPLv2 or later](./LICENSE), the same license as WordPress itself.
