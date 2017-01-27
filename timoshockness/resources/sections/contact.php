<form method="get" class="f_sans">
    <legend>Send me an email, let's talk!</legend>
    <div class="left contact-left">
        <label for="name">Your name:</label>
        <br />
        <input type="text" id="name" name="name" required="What is this?"/>
        <br />
        <label for="email">Your E-mail:</label>
        <br />
        <input type="email" id="email" name="email" required="????"/>
    </div>
    <div class="right contact-right">
        <label for="message">Your message:</label>
        <br />
        <textarea name="message" id="message" rows="6" cols="50" required="Here too"></textarea>
    </div>
    <div class="clear full">
        <input type="button" id="submit" onclick="contact_email()" name="submit" value="Send Email" />
    </div>
</form>
