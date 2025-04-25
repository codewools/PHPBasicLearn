
<!DOCTYPE html>
<html>
<head>
<style>
* {
  color: white;
}

.flex-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction:column;
  height: 400px;
   /* Transition for smooth hover effect */
}

.button {
display:flex;
 justify-content: center;
  align-items: center;
  font-size: 40px;
  font-weight: 700;
  height: 100px;
  width: 60%;
  margin: 0 auto;
  background-color: #547792;
  border-radius: 40px;

  transition: 2s;
}

.button:hover {
  border-radius: 30px;
  transform: scale(1.02);  /* Correct syntax for scaling */
  background-color: #213448;
  /* The transition is already applied to the container, no need to repeat it */
}

/* Responsive layout - makes the text smaller for smaller screens */
@media (max-width: 500px) {
  .button {
    font-size: 10px;
    transition: 2s;
  }
}
</style>
</head>
<body>
<div class="flex-container">
  <div class="button"><?php echo 'heloo'?></div>
  <div class="button">Deleete</div>
  <div class="button">Update</div>
  <div class="button">Deleete</div>
  <div class="button">Update</div>
</div>

</body>
</html>
