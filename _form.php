<section class="container">
    <h2 id="contact">Get in touch</h2>
    <p>
        Leave us a message and we will get back yo you as soon as possible.
    </p>

    <form method="post" action="" class="form">
        <div class="form-info">
            <small>Fields marked with red wildcards * are required.</small>
        </div>

        <div class="form-group">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email <span>*</span></label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="subject">Subject <span>*</span></label>
            <select name="subject" id="subject" required>
                <option value="" disabled selected></option>
                <option value="Make an appointment">Make an appointment</option>
                <option value="Newsletter Sign-Up">Newsletter Sign-Up</option>
                <option value="Reclamation">Reclamation</option>
                <option value="Ask for a quote">Ask for a quote</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="auto" rows="15"></textarea>
        </div>

        <div class="form-submit">
            <input type="submit" value="SEND">
        </div>
    </form>
</section>