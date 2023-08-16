<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>

  

  .resizedTextbox {width: 500px; height: 50px}

  .btn{
    background-color:black;
    color:white;
  }
  .html{
    background-color: grey;
  }
  
  
  
  
  </style>
</head>
<body>

   
    <h1>REPORT DETAILS</h1>
    
    <form method="post" action="sampl.php">
        
        <label for="event">EVENT</label>
        <input type="text" class="resizedTextbox" name="event" id="event" placeholder="Speak Something" onclick="record(this)">
        
        <label for="date">DATE</label>
        <input type="text"  name="date" id="date" placeholder="DD-MM-YYYY">
        
        <label for="organizer">ORGANIZATION</label>
        <input type="text"  class="resizedTextbox" name="organizer" id="organizer" placeholder="Speak Something" onclick="record(this)" >

        <label for="writer">SUBMITTED BY</label>
        <input type="text" class="resizedTextbox"  name="writer" id="writer" placeholder="Speak Something" onclick="record(this)">

        <label for="department">DEPARTMENT</label>
        <input type="text" class="resizedTextbox"  name="department" id="department" placeholder="Speak Something" onclick="record(this)" >
        
        <label for="summary">SUMMARY</label>
        <input type="text" class="resizedTextbox" name="summary" id="summary" placeholder="Speak Something" onclick="record(this)">

        <label for="conclusion">CONCLUSION</label>
        <input type="text" class="resizedTextbox" name="conclusion" id="conclusion" placeholder="Speak Something" onclick="record(this)">
       
        
        <button class="btn">Generate PDF</button>
    </form>

    <script>
                
        function record(e) { 
            
            let current = e;
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "en-GB";

            recognition.onresult = function(event) {
                
               current.value = event.results[0][0].transcript;
            }
            recognition.start();

        }
        
      
    </script>
</body>
</html>