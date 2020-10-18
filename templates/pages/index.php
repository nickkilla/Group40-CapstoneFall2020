<?php
// no variables needed, static content

use lib\components\Alertbox;
use lib\components\AppInfo;

?>

<?php if (isset($_GET['message']) && $_GET['message'] === 'logout-successful'): ?>
    <section class="section">
        <?= Alertbox::renderSuccess('Logged out successfully'); ?>
    </section>
<?php endif; ?>

<div id="header" class="is-size-1">
    <!-- include directly via SVG -->
    <span class="icon is-large">
    </span>
    <h1>&nbsp;Coursera Capstone Fall 2020</h1>
</div>

<section class="section">
    <p class="content has-text-centered">
        This is the Coursera Capstone Project implemented by John Freeman and Jeremy Carnes.
    </p>
</section>

<div id="main-links">
    <p id="login">
        <a href="<?= AppInfo::urlLoginPage() ?>" class="large-font">
            <span class="icon button-icon">
                <svg focusable="false" class="svg-inline--fa fa-home fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg>
            </span> Log in
        </a>
    </p>
    <p id="register">
        <a href="<?= AppInfo::urlRegisterPage() ?>" class="large-font">
            <span class="icon button-icon">
                <svg focusable="false" class="svg-inline--fa fa-user-plus fa-w-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
            </span> Register
        </a>
    </p>
</div>
