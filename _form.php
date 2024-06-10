<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = array_map('trim', $_POST);
    $regex = '/^[a-zA-Z]+\s+[\p{L}-]*$/';

    if (empty($contact['name'])) {
        $errors[] = 'Name is required';
    } elseif (!preg_match($regex, $contact['name'])) {
        $errors[] = 'Only letters and white spaces are allowed for the name';
    }

    if (empty($contact['email'])) {
        $errors[] = 'Email is required';
    } elseif (filter_var($contact['email'], FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = 'Invalid email format';
    }

    if (empty($contact['subject'])) {
        $errors[] = 'Please choose a subject in the list';
    }

    if (empty($errors)) {
        header('Location: contactSuccess.php');
        exit();
    }
} ?>

<section class="container">
    <form method="post" action="" class="form">

        <?php if (!empty($errors)) : ?>
            <h3>Please fix errors below</h3>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else :?>

        <div class="form-group">
            <small>Fields marked with red wildcards * are required.</small>
        </div>

        <?php endif; ?>

        <div class="form-group">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="<?= $contact['name'] ?? '' ?>">
        </div>

        <div class="form-group">
            <label for="email">Email <span>*</span></label>
            <input type="email" name="email" id="email" value="<?= $contact['email'] ?? '' ?>">
        </div>

        <div class="form-group">
            <label for="subject">Subject <span>*</span></label>
            <select name="subject" id="subject">
                <option value="" disabled selected></option>
                <option value="Make an appointment">Make an appointment</option>
                <option value="Newsletter Sign-Up">Newsletter Sign-Up</option>
                <option value="Reclamation">Reclamation</option>
                <option value="Ask for a quote">Ask for a quote</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="auto" rows="15">
                <?= $contact['message'] ?? '' ?>
            </textarea>
        </div>

        <div class="form-submit">
            <input type="submit" value="SEND">
        </div>
    </form>
</section>