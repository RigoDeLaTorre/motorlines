
<fieldset>
  <input type="text" name="name" value="<?= $name ?>" placeholder="Name" tabindex="1">
  <span class="error"><?= $name_error ?></span>
</fieldset>
<fieldset>
  <input type="text" name="email" value="<?= $email ?>" placeholder="Email" tabindex="2">
  <span class="error"><?= $email_error ?></span>
</fieldset>
<fieldset>
<textarea name="message" type="text" rows="8" cols="60" value ="<?= $message ?>" placeholder="Message" tabindex="4"></textarea>
</fieldset>
<fieldset>
  <button type="submit" name="submit" id="contact-submit" data-submit="...Sending" tabindex="5">Submit</button>
</fieldset>
