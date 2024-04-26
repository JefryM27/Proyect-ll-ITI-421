<?php require($_SERVER['DOCUMENT_ROOT'] . '/utils/header.php'); ?>
<title>View Ride</title>
<img src="/pages/images/image.png" alt="Car" class="img-fluid mx-auto d-block mt-3 mb-4">
<div class="card-body">
    <h2 class="mb-4">Ride Info</h2>
    <!--Include the PHP file to get ride information -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Functions/model/getRide.php'); ?>
    <div class="mt-4">
        <label for="rideName" class="form-label">Ride Name</label>
        <input type="text" class="form-control" id="rideName" name="rideName" readonly value="<?php echo htmlspecialchars($rideName); ?>">
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="startFrom" class="form-label">Start From</label>
            <input type="text" class="form-control" id="startFrom" name="startFrom" readonly value="<?php echo htmlspecialchars($startFrom); ?>">
        </div>
        <div class="col-md-6">
            <label for="end" class="form-label">End</label>
            <input type="text" class="form-control" id="end" name="end" readonly value="<?php echo htmlspecialchars($endTo); ?>">
        </div>
    </div>
    <div class="mt-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="2" readonly><?php echo htmlspecialchars($description); ?></textarea>
    </div>
    <hr>
    <h4>When</h4>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="departure" class="form-label">Departure</label>
            <input type="time" class="form-control" id="departure" name="departure" readonly value="<?php echo htmlspecialchars($departure); ?>">
            <label for="arrival" class="form-label">Estimated Arrival</label>
            <input type="time" class="form-control form-control-sm" id="arrival" name="arrival" readonly value="<?php echo htmlspecialchars($arrival); ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Select Days</label>
            <div>
                <input type="checkbox" id="monday" name="monday" value="Monday" <?php if (in_array("Monday", $days)) echo "checked"; ?> disabled>
                <label for="monday">Monday</label><br>
                <input type="checkbox" id="tuesday" name="tuesday" value="Tuesday" <?php if (in_array("Tuesday", $days)) echo "checked"; ?> disabled>
                <label for="tuesday">Tuesday</label><br>
                <input type="checkbox" id="wednesday" name="wednesday" value="Wednesday" <?php if (in_array("Wednesday", $days)) echo "checked"; ?> disabled>
                <label for="wednesday">Wednesday</label><br>
                <input type="checkbox" id="thursday" name="thursday" value="Thursday" <?php if (in_array("Thursday", $days)) echo "checked"; ?> disabled>
                <label for="thursday">Thursday</label><br>
                <input type="checkbox" id="friday" name="friday" value="Friday" <?php if (in_array("Friday", $days)) echo "checked"; ?> disabled>
                <label for="friday">Friday</label><br>
                <input type="checkbox" id="saturday" name="saturday" value="Saturday" <?php if (in_array("Saturday", $days)) echo "checked"; ?> disabled>
                <label for="saturday">Saturday</label><br>
                <input type="checkbox" id="sunday" name="sunday" value="Sunday" <?php if (in_array("Sunday", $days)) echo "checked"; ?> disabled>
                <label for="sunday">Sunday</label><br>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="/utils/home.php" class="btn btn-danger">Back</a>
    </div>
    </form>
</div>
</body>

</html>