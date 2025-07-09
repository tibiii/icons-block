# Icons Block WordPress Plugin

## Description

**Icons Block** is a WordPress plugin designed to import and manage libraries of SVG icon files, allowing you to use and customize icons in your WordPress site. It supports different icon styles (such as outline, solid, etc.) and provides a user-friendly block for the WordPress Block Editor (Gutenberg).

- **SVG Library Support:** Import collections of SVG icons organized by type (e.g., outline, solid).
- **Customizable:** Icons can inherit text color, font size, and other styles from your theme or the WordPress Site Editor.
- **Block Editor Integration:** Easily select, preview, and insert icons into your content using a custom block.
- **Type Switching:** Seamlessly switch between icon styles (outline, solid, etc.) if the same icon exists in multiple styles.
- **GPL Licensed:** Distributed under the GNU General Public License v2 or later.

## Installation

1. Copy the plugin folder to your `wp-content/plugins/` directory.
2. Run `npm install` in the plugin directory to install dependencies.
3. Add the `icons/` directory with your SVG files, organized by type (e.g., `outline/`, `solid/`).
   - Ensure your SVG files are named consistently (e.g., `icon-name.svg`).
4. Run the following command to generate the React components from your SVG files:
   ```
   node generate-icons.js
   ```
   This will scan the `icons/` directory for SVG files and generate the `src/icons.react.js` file, which is used by the block. Make sure your SVGs are organized by type (e.g., `icons/outline/`, `icons/solid/`).
5. Run `npm run build` to compile the plugin assets.
6. Upload the plugin to your WordPress site via the admin dashboard or by copying it directly to the `wp-content/plugins/` directory.
7. Activate the plugin from the WordPress admin dashboard.

## Usage

- Insert the Icons block and select an icon from your imported SVG library
- Switch between available icon types/styles using the radio selector.
- Customize icon color, size, and background using the Site Editor or block settings.

## License

This plugin is licensed under the GPLv3 license, the same license as WordPress itself.
