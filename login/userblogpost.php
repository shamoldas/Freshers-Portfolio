  <h2>Contact Us</h2>
    <p>Please fill in this form and send us.</p>
    <form action="process-userblogpost.php" method="post">
        <p>
            <label for="inputName">Title:<sup>*</sup></label>
            <input type="text" name="name" id="inputName">
        </p>
        <p>
            <label for="inputEmail">Category:<sup>*</sup></label>
            <input type="text" name="category" id="inputEmail">
        </p>
        <p>
            <label for="inputSubject">Subcat:</label>
            <input type="text" name="subcat" id="inputSubject">
        </p>
        <p>
            <label for="inputComment">Message:<sup>*</sup></label>
            <textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>