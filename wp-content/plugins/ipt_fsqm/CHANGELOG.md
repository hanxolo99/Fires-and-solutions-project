From version 4.0.0 this file will only contain changelog for the current active
version according to [semver](http://semver.org/). For older changelog, kindly
see files like `CHANGELOG-vX.md` (will be available after releasing version 5.0).

## Version 4.8.0 [01-08-2019]

> Form builder & MCQ improvements.

- **New** - Option to collapse the form builder sidebar.
- **New** - Button like appearance for radio and checkboxes.
- **Update** - Form score now supports fractional values.
- **Fix** - Server side conditional logic for password elements.
- **Fix** - Limitation message not visible for logged-in users.
- **Fix** - Manual submit button not working on single page form.
- **Fix** - TinyMCE toolbar not visible under form builder settings.
- **Fix** - Typo in Text element settings.
- **Fix** - Signature element buttons.
- **Fix** - Column alignment in material style.
- **Fix** - File uploader upload button click area.

## Version 4.7.0 [09-13-2018]

> Convertkit Integration, Migrate to WooCommerce CRUD API & manual form buttons.

-   **New** - Add option to hide default Form Submit toolbar.
-   **New** - Convertkit integration with support for forms, sequences and tags.
-   **New** - New Buttons element to make form progress, jump to page, submit etc.
-   **New** - New preset datetime related variables for math element.
-   **New** - Option to disable eForm admin side sandboxing. Fixes conflict with wp.com hosting.
-   **New** - Option to hide password field values from summary table.
-   **Update** - Always encrypt the values of password field.
-   **Update** - Improve CSS build system by using autoprefixed SCSS.
-   **Update** - Migrate WooCommerce integration to the new CRUD system. No more deprecation notice.
-   **Fix** - Allow dash(-) in name validation.
-   **Fix** - Math element fancy tag issue on single page forms.
-   **Fix** - Piping tags not appearing for freetype elements in summary table.
-   **Fix** - Use elements from freetype for registration username.

## Version 4.6.1 [09-03-2018]

> WooCommerce Integration Improvement.

-   **New** - eForm can now accept product variation id.
-   **New** - You can select multiple order status to mark as paid.

## Version 4.6.0 [09-02-2018]

> Form Builder UX improvement.

-   **New** - Compatibility with WordPress Gutenberg.
-   **New** - Major improvement and complete rewrite of form builder UI and UX. Check our onboarding video.
-   **New** - More styles for progress buttons.
-   **New** - Onboarding tutorial when accessing Form Builder for the first time.
-   **New** - Optionally show WooCommerce payment status in summary table and in admin side View all Submissions.
-   **New** - Sandbox eForm admin pages from other plugins to avoid conflict.
-   **New** - Various new form templates.
-   **Update** - Sane default for a few form elements, including imageslider, thumbnail picker etc.
-   **Update** - Skip WooCommerce if product_id is empty, creating room for conditional one-page or WooCommerce checkout.
-   **Fix** - Center alignment for credit card container and stripe.
-   **Fix** - Datetime element not working in live form view.
-   **Fix** - Form Configuration being closed when uploading image.
-   **Fix** - Issue with CONFIG and STYLE change refresh.
-   **Fix** - Issues with Link Button form element.
-   **Fix** - Regenerate form custom css when version upgrades.
-   **Fix** - Set form width unit to pixel, when none is supplied.
-   **Fix** - Show error message when reCaptcha is not being set up correctly.

## Version 4.5.2 [07-30-2018]

> Bug fixes.

-   **Fix** - Empty feedback issue when sending on-behalf of user.
-   **Fix** - Issue with security reCaptcha element.
-   **Fix** - Issue with "Submission Limited" forms not appearing within form builder.

## Version 4.5.1 [07-27-2018]

> Live form builder improvements.

-   **Update** - Improvement for custom style generation (with checksum).
-   **Update** - Improve response time of live form builder.
-   **Update** - Improve UX of live form builder.

---

## Version 4.5 [07-26-2018]

> Form Builder enhancement & new boxy theme.

### Changes

-   **New** - Live form builder interface.
-   **New** - Boxy form themes.
-   **New** - System and Custom fonts support.
-   **New** - Global element alignments.
-   **Update** - Accessibility for various form elements.
-   **Update** - Update MyMail to Mailster.
-   **Fix** - Math element appearance issue on small devices.
-   **Fix** - Invalid hashtag breaking popup.
-   **Fix** - Blank feedback email when send from user is true.
-   **Fix** - Localize GetResponse PHP Library to avoid Fatal errors.
-   **Fix** - Address box alignment issues.

---

## Version 4.2.1

> Bug fixes and pricing table enhancement.

### Changes

-   **New** - Support piping tags in pricing element header, attributes & footer.
-   **Fix** - A case when hidden element won't restore value if placed inside a container with duplicate conditional logic.

---

## Version 4.2.0

> Bug Fixes, Offline Payment, Mobile Optimization & Moving forward from mcrypt

### Changes

-   **New** - Integration with MailWizz Application.
-   **New** - Offline Payment Gateway integration.
-   **New** - Remove mcrypt dependency with graceful fallback for older instances.
-   **Update** - Option for natively using Mobile Camera with File Uploader.
-   **Update** - Update to new Stripe API for subscription.
-   **Fix** - Full Name Element validation issue with "Everything" filter.
-   **Fix** - Leaderboard and User Portal responsiveness issue.
-   **Fix** - Math element fancy appearance issue with hidden label.
-   **Fix** - Sortable list icons not appearing in summary table.

---

## Version 4.1.3

> Bug fixes and compatibility with easySubmission Add-on

### Changes

-   **Fix** - JS bug with dependent datepicker element.
-   **Fix** - CSS issue with datepicker div, not being hidden under some theme.
-   **Fix** - Compatibility issue with easySubmission add-on.

---

## Version 4.1.2

> Bug fixes

### Changes

-   **Fix** - Blank value appearance issue for inline element
-   **Fix** - Stripe Elements appearance issue for dark themes

---

## Version 4.1.1

> Bug fixes and feature enhancements

### Changes

-   **New** - Add Support for MailPoet 3
-   **Update** - Underline fill in the blank question in summary table
-   **Update** - Highlight correct feedback questions according to settings
-   **Update** - Make score and average score output configurable
-   **Fix** - Auto shrink thumbnail elements on smaller screen

---

## Version 4.1.0

> Implement Subscription Payments

### Changes

-   **New** - Subscription Payment with Stripe.
-   **New** - Option to highlight all positive scores in summary table.
-   **New** - Option to reverse the order of smiley rating.
-   **Fix** - Appearance issue with styled container without icons.
-   **Fix** - Bug in iFrame/GPS inside hidden/collapsible containers.
-   **Fix** - Missing prefix and suffix in feedback small inline appearance.
-   **Fix** - Make Center/Vertical appearance work for payment element.
-   **Fix** - Hidden Stripe Payment causing JS error.
-   **Fix** - Primary fields not getting disabled after adding to the form.
-   **Fix** - GetResponse Integration now updated with v3 API.

### Under the hood

-   **Update** - Improve Auto-Update and error reporting functionality.

---

## Version 4.0.3

> Fix Guest Blogging Element appearance issues.

### Changes

-   **Fix** - Issue with Guest Blog element placeholder.
-   **Fix** - Issue with Guest Blog Editor toolbar modals.

### Under the hood

-   **New** - Option to disable eForm activation notice.

---

## Version 4.0.2

> Fix Payment and ZIP code related issues.

### Changes

-   **Fix** - Issue with payment retry form.
-   **Fix** - Issue with ZIP code field not accepting alphanumeric codes.

### Under the hood

-   **Update** - Move `hiddens` method to `IPT_Plugin_UIF_Base` to expose to all classes.
-   **Update** - Updated Composer dependencies to latest (`Stripe`).

---

## Version 4.0.1

> Quick patch for WordPress MultiSite.

### Changes

-   **Fix** - Static database table naming issue with WordPress MS

---

## Version 4.0.0

> Major code refactor to introduce modern workflow and features focused on payment
> and cost estimation.

Many breaking API changes. Check the [DevOps](https://wpq-develop.wpquark.xyz/wp-fsqm-pro/)
page for more information.

### Changes

-   **New** - Authorize.net payment integration
-   **New** - Auto Update Functionality
-   **New** - Automatic score for feedback elements
-   **New** - Estimation Slider interface for payment forms
-   **New** - Input masking on freetype form elements
-   **New** - Interactive form elements support for piping element values into labels
-   **New** - OpenGraph & Twitter metadata in standalone form pages
-   **New** - Option to change color of summary table icons
-   **New** - Pricing Table Form Element
-   **New** - Row index for checkbox, radio and thumnail numeric values in math element
-   **New** - Zoom for statistics charts
-   **Update** - Better colorpicker for Form Builder
-   **Update** - Better looking payment forms
-   **Update** - Better Signature Element
-   **Update** - Implement changes according to new facebook API
-   **Update** - Inline appearance for feedback small element
-   **Update** - iziModal in popup forms with support for better manual popup
-   **Update** - jQuery UI Sliders are now more responsive
-   **Update** - Leaderboard shows rank and timer value
-   **Update** - Select2 styling is now consistent with inputs
-   **Fix** - Auto fix bad color codes in customizable material theme
-   **Fix** - Auto Save Form Progress UI inconsistency
-   **Fix** - Cookies based limitation not working under IE11
-   **Fix** - Hidden mathematical element appearance issue
-   **Fix** - Issue with file upload size
-   **Fix** - Issue with sort by name in payment listing
-   **Fix** - Issue with User Portal page logout redirect
-   **Fix** - Placeholder issue in multiple grading settings

### Under the hood

-   **New** - Adaptation to modern workflow with modular approach
-   **New** - Grunt based CI/CD with support for automatic plugin updates for clients
-   **New** - Payment module refactoring
-   **New** - PHPUnit testing for a better continuous integration
-   **New** - UI class refactoring
-   **New** - Use bower to manage front-end dependencies
-   **New** - Use composer to manage PHP dependencies
-   **New** - Use NPM to manage dev dependencies
