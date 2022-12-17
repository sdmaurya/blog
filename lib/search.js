  
    var availableTags = [
        "Aws",
        "Docker",  
        "Agile",
        "Json",    
        "Cloud",
        "Html",
        "Blockchain",   
        "Linux",   
        "Git",   
      ];
    $( function() {
    
      $( "#tags" ).autocomplete({
        source: availableTags
      });
    } );
  
    function isEmpty(str) {
      return !str.trim().length;
  }
  
  function countWords(str) {
      var arr = str.split(' ');
  
      return arr.filter(word => word !== '').length;
  }
  
  function myFunction() {
      var getval = $('#tags').val();
      var isEmpty = str => !str.trim().length;
      if (isEmpty(getval)) {
          alert('Please type your course name. you want to do a search.')
      } else {
  
          if (countWords(getval) == 1) {
              if (availableTags.includes(getval) !== -1) {
                  window.location.href = "http://temp.co/" + getval.toLowerCase();
              } else {
                  alert("No Result Found.")
                  $('#tags').val('');
              }
  
          } else {
              var myArray = getval.split(" ");
  
              if (availableTags.indexOf(myArray[0]) !== -1) {
                  window.location.href = "http://temp.co/" + myArray[0].toLowerCase();
              } else {
                  alert("No Result Found.")
                  $('#tags').val('');
              }
          }
  
  
  
      }
  }
       