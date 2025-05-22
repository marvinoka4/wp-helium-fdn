# Helium-Fdn

A lightweight WordPress starter theme for developers, built with Foundation CSS, SCSS, and Gulp. Helium-Fdn offers a modern, customisable foundation for crafting bespoke WordPress themes, featuring a responsive grid, Foundation components, spacing utilities, and block editor support.

## Features

- **Foundation CSS 6**: Responsive grid, components (e.g., buttons, sliders), and utilities (e.g., `.padding-vertical-4`).
- **SCSS Workflow**: Modular Sass with `_settings.scss` for colours, fonts, breakpoints, and more.
- **Gulp Automation**: Tasks for SCSS/JS compilation, minification, sourcemaps, and BrowserSync reloading.
- **Block Editor Support**: Includes a "Content Section" block pattern and "Helium-Fdn Primary" button style.
- **Testimonial Archive and Slider**: Custom post type with a Swiper.js-powered slider.
- **Typography**: Questrial (body) and Albert Sans (headings) fonts via Google Fonts, with local font support.
- **Translation-Ready**: Includes German, Spanish, French, and Portuguese (Brazil) translations.
- **Lightweight and Performant**: Minified CSS/JS with PurgeCSS for optimised delivery.
- **Developer-Friendly**: Sourcemaps, modern Sass syntax, and extensible templates.

## System Requirements

- **WordPress**: Version 6.8 or higher (tested on 6.8).
- **PHP**: Version 8.1 or higher.
- **Node.js**: Version 18.x (LTS) recommended; check compatibility with your environment.
- **Browser**: Modern browsers (Chrome, Firefox, Safari, Edge).

## Installation

1. **Install WordPress**:

   - Set up a WordPress site (local or hosted, e.g., `http://localhost:10078`).
   - Ensure WordPress 6.8+ and PHP 8.1+ are installed.

2. **Download Helium-Fdn**:

   - Clone the repository to `wp-content/themes/helium-fdn`:

     ```bash
     git clone https://github.com/marvinoka4/wp-helium-fdn.git wp-content/themes/helium-fdn
     ```scss

     Or download `helium-fdn.zip` from `https://marvinoka4.com` and upload via WordPress admin (`Appearance > Themes > Add New`).

3. **Install Dependencies**:

   - Navigate to the theme directory:

     ```bash
     cd wp-content/themes/helium-fdn
     ```bash

   - Install Node.js dependencies:

     ```bash
     npm install
     ```

4. **Build Assets**:

   - Run Gulp to compile SCSS and JS:

     ```bash
     npx gulp
     ```

   - Generates `assets/styles/css/app.min.css` and `assets/scripts/js/app.min.js`.

5. **Activate Theme**:

   - In WordPress admin (`Appearance > Themes`), activate Helium-Fdn.

## Development Setup

Helium-Fdn is tailored for developers, offering a robust SCSS and Gulp workflow.

### SCSS Configuration

Customise the theme’s appearance in `assets/styles/scss/global/_settings.scss`. Key variables include:

```scss
// Colours
$primary: #1779ba; // Blue for buttons, links
$secondary: #767676;
$success: #3adb76;
$white: #fefefe;

// Fonts
$body-font-family: "Questrial", sans-serif;
$heading-font-family: "Albert Sans", sans-serif;

// Breakpoints
$small-breakpoint: 0em;
$medium-breakpoint: 40em;
$large-breakpoint: 64em;

// Spacing
$global-margin: 1rem;
$global-padding: 0.625rem;
```

- **Edit Variables**: Update `$primary`, `$body-font-family`, etc., to suit your design.
- **Add Partials**: Create new SCSS files in `assets/styles/scss/` and import in `app.scss`.
- **Compile**: Run `npx gulp sass` to update `app.min.css`.

#### Using Local Fonts

To host fonts locally (instead of Google Fonts), follow these steps:

1. **Add Font Files**:

   - Place font files (e.g., `.woff2`, `.woff`) in `assets/fonts/`. For example:

     ```assets/fonts/
       Questrial-Regular.woff2
       Questrial-Regular.woff
       AlbertSans-Regular.woff2
       AlbertSans-Regular.woff
       AlbertSans-Bold.woff2
       AlbertSans-Bold.woff
     ```

   - Obtain fonts from sources like Google Fonts (downloadable via `https://fonts.google.com`) or custom providers. Use `.woff2` for modern browsers and `.woff` as a fallback for broader compatibility.

2. **Define Fonts in** `_settings.scss`:

   - Add `@font-face` rules at the top of `assets/styles/scss/global/_settings.scss`:

     ```scss
     @font-face {
       font-family: "Questrial";
       src: url("../fonts/Questrial-Regular.woff2") format("woff2"),
            url("../fonts/Questrial-Regular.woff") format("woff");
       font-weight: normal;
       font-style: normal;
       font-display: swap;
     }
     
     @font-face {
       font-family: "Albert Sans";
       src: url("../fonts/AlbertSans-Regular.woff2") format("woff2"),
            url("../fonts/AlbertSans-Regular.woff") format("woff");
       font-weight: normal;
       font-style: normal;
       font-display: swap;
     }
     
     @font-face {
       font-family: "Albert Sans";
       src: url("../fonts/AlbertSans-Bold.woff2") format("woff2"),
            url("../fonts/AlbertSans-Bold.woff") format("woff");
       font-weight: bold;
       font-style: normal;
       font-display: swap;
     }
     ```

   - **Notes**:
     - `font-display: swap` ensures text renders with a fallback font during loading, improving performance.
     - Adjust `font-weight` and `font-style` based on your font files (e.g., `400` for regular, `700` for bold).
     - Use relative paths (`../fonts/`) to reference `assets/fonts/` from `assets/styles/scss/`.

3. **Update Font Variables**:

   - Modify `$body-font-family` and `$heading-font-family` in `_settings.scss` to use local fonts:

     ```scss
     $body-font-family: "Questrial", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
     $heading-font-family: "Albert Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
     ```

   - Include system fonts as fallbacks for robustness.

4. **Remove Google Fonts**:

   - In `functions.php`, remove the Google Fonts enqueue (if present):

     ```php
     // Before
     wp_enqueue_style('helium-fdn-fonts', 'https://fonts.googleapis.com/css2?family=Questrial&family=Albert+Sans:wght@400;700&display=swap', [], null);
     
     // After
     // Remove or comment out the above line
     ```

   - Alternatively, check `assets/styles/scss/app.scss` for Google Fonts imports (e.g., `@import url('https://fonts.googleapis.com/...');`) and remove them.

5. **Compile Changes**:

   - Run Gulp to compile the updated SCSS:

     ```bash
     npx gulp sass
     ```

   - Verify `assets/styles/css/app.min.css` includes the local font definitions.

6. **Best Practices**:

   - **File Formats**: Use `.woff2` (smaller, modern) and `.woff` (wider support). Avoid `.ttf` or `.otf` for web use due to larger file sizes.
   - **Font Subsetting**: If using custom fonts, subset them (e.g., via FontSquirrel) to include only necessary characters, reducing file size.
   - **Performance**: Host fonts in `assets/fonts/` to leverage browser caching with LiteSpeed Cache (tested April 18, 2025).
   - **Testing**: Check font rendering across browsers (Chrome, Firefox, Safari, Edge) and clear caches:

     ```bash
     wp litespeed-purge all
     ```

### Gulp Workflow

The `gulpfile.js` automates asset compilation and browser reloading. Key tasks:

- **Sass Task**: Compiles SCSS (with Swiper CSS), adds sourcemaps, autoprefixes, applies PurgeCSS, and minifies.
- **JS Task**: Concatenates and minifies JS (Swiper, Foundation, custom scripts).
- **BrowserSync**: Reloads the browser on file changes.
- **Watch Task**: Monitors SCSS, JS, and PHP for changes.

**Configure BrowserSync**:

Update `gulpfile.js` to match your local WordPress URL:

```javascript
browserSync.init({
  proxy: 'http://localhost:10078', // Replace with your URL
  port: 3002, // Adjust if needed
  notify: false,
  open: true,
  logLevel: 'info'
});
```

**Run Gulp**:

```bash
npx gulp
```

This compiles assets, starts BrowserSync, and watches for changes. Run specific tasks as needed:

```bash
npx gulp sass  # Compile SCSS
npx gulp js    # Compile JS
```

### Foundation CSS Features

Helium-Fdn leverages Foundation’s responsive grid, components, and utilities:

- **Grid**: Use `.grid-x` and `.cell` for flexible layouts (e.g., `<div class="grid-x"><div class="cell small-12 medium-6">`).
- **Components**: Includes buttons, sliders (via Swiper.js), and navigation (e.g., off-canvas menu).
- **Utilities**: Apply spacing classes like `.padding-vertical-4` (4rem vertical padding).

Customise utilities in `_settings.scss` (e.g., `$global-padding`) or add new classes in `assets/styles/scss/`.

## Customisation

### Templates

- **Add Templates**: Create files in `template-parts/` (e.g., `template-parts/content/custom.php`) and include them:

  ```php
  get_template_part('template-parts/content/custom');
  ```

- **Page Templates**: Add custom page templates (e.g., `page-custom.php`):

  ```php
  <?php /* Template Name: Custom Page */ ?>
  ```

### Block Editor

Helium-Fdn supports the WordPress Block Editor:

- **Block Pattern**: Use the “Content Section” pattern (Patterns &gt; Text) for a pre-styled section with heading, paragraph, and button.
- **Block Style**: Apply “Helium-Fdn Primary” to Button blocks for a blue button (`#1779ba` background).

Add new patterns/styles in `functions.php`:

```php
register_block_pattern(
  'helium-fdn/new-pattern',
  array(
    'title' => __('New Pattern', 'helium-fdn'),
    'content' => '<!-- wp:paragraph --><p>Your content</p><!-- /wp:paragraph -->'
  )
);
```

### Translations

Helium-Fdn includes translations in `languages/` for:

- German (`helium-fdn-de_DE`)
- Spanish (`helium-fdn-es_ES`)
- French (`helium-fdn-fr_FR`)
- Portuguese (Brazil) (`helium-fdn-pt_BR`)

**Edit Translations**:

1. Use Poedit or a text editor to modify `.po` files.
2. Generate `.mo` files:

   ```bash
   wp i18n make-mo wp-content/themes/helium-fdn/languages
   ```

3. Set site language in WordPress admin (`Settings > General`).

**Add New Translations**:

```bash
wp i18n make-pot wp-content/themes/helium-fdn languages/helium-fdn.pot
```

## Plugin Compatibility

As a starter theme, Helium-Fdn is designed to work with most WordPress plugins. It has been tested with:

- **LiteSpeed Cache**: Optimises performance (clear cache after updates: `wp litespeed-purge all`).
- **Yoast SEO**: Enhances search engine optimisation.
- **Formidable Forms**: Supports custom forms (e.g., visa status forms).

Test additional plugins as needed and report issues via support channels.

## Packaging for Distribution

Package the theme for WordPress.org, Envato Elements, or your website:

```bash
cd wp-content/themes/helium-fdn
zip -r helium-fdn.zip . -x ".*"
```

This includes SCSS, Gulp, translations, fonts, and all theme files, excluding hidden files (e.g., `.DS_Store`). Developers run `npm install` to set up dependencies.

## Troubleshooting

- **Gulp Errors**:

  - Verify Node.js 18.x+ (`node -v`). If issues persist, try Node.js 20.x.
  - Reinstall dependencies: `rm -rf node_modules package-lock.json && npm install`.
  - Ensure `gulpfile.js` proxy matches your WordPress URL.

- **Translations Not Loading**:

  - Check `.mo` files in `languages/`.
  - Confirm site language (e.g., `de_DE` for German).

- **CSS/JS Not Updating**:

  - Run `npx gulp` to recompile.
  - Clear caches: `wp litespeed-purge all`.

- **BrowserSync Issues**:

  - Update `proxy` in `gulpfile.js` to your local URL.
  - Try a different port (e.g., 3003).

- **Local Fonts Not Loading**:

  - Verify font file paths in `@font-face` (e.g., `../fonts/Questrial-Regular.woff2`).
  - Ensure fonts are in `assets/fonts/` and included in `helium-fdn.zip`.
  - Check browser console for 404 errors and confirm MIME types in your server configuration.

## Contributing

Contributions are welcome! Fork the repository and submit pull requests:

1. Clone: `git clone https://github.com/marvinoka4/wp-helium-fdn.git`
2. Create a branch: `git checkout -b feature/your-feature`
3. Commit: `git commit -m "Add your feature"`
4. Push: `git push origin feature/your-feature`
5. Open a pull request on GitHub.

Report issues at `https://github.com/marvinoka4/wp-helium-fdn/issues`.

## Support

Email `info@marvinoka4.com` or open a GitHub issue at `https://github.com/marvinoka4/wp-helium-fdn/issues`. Visit `https://marvinoka4.com/docs` for updates.

## Changelog

- **1.0.0** (April 2025):
  - Initial release with Foundation CSS, SCSS/Gulp, block pattern/style, translations, and local font support.

- **1.0.1** (May 2025):
  - Fixed off-canvas menu click functionality while maintaining keyboard support.
  - Added underlined links in content areas for accessibility.
  - Enhanced skip link styling and functionality.
  - Added focus indicators for navigation, forms, and buttons.
  - Updated readme.txt with licenses for all third-party resources, including custom SVGs.
  - Confirmed all theme functions, classes, and hooks are prefixed.

## Helium-Fdn Pro

A premium version with advanced features (e.g., additional block patterns, Customiser options) is in development. Join the mailing list at `https://marvinoka4.com` for updates.

## Licences

- **Helium-Fdn**: GNU General Public Licence v2 or later.
- **Foundation CSS**: MIT Licence (<https://get.foundation>).
- **Swiper.js**: MIT Licence (<https://swiperjs.com>).
- **Questrial/Albert Sans Fonts**: SIL Open Font Licence (<https://fonts.google.com>).
