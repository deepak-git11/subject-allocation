let arr=[];
let arr2 =[];
let count=0;
function fn() {
  //let count=0;
  fn_1();
  fn_2();
  fn_3();
  fn_4();
  fn_5();
}
function upcount(){
  const cspan=document.getElementsByClassName('hrs');

  for (var i = 0; i < cspan.length; i++) {
      if (cspan[i].tagName === 'INPUT') {
          cspan[i].value = count;
      } else if (cspan[i].tagName === 'SPAN') {
          cspan[i].textContent = count;
      }
  }

        }
          

        let flag=0;
           function fn_1() {
          
            arr = [];
            document.getElementById("mytext").value = "";
            if (document.getElementById("opt1").checked == true) {
                const cspan = document.getElementById("hrs");
                var checkboxes = document.querySelectorAll(
                    "input[type=checkbox][class=pre1]:checked"
                );
                var checkboxesLength = checkboxes.length; // Store the length of checked checkboxes
                count += checkboxesLength; // Increment count by the length of checked checkboxes
                upcount();
                for (var i = 0; i < checkboxes.length; i++) {
                    var a = checkboxes[i].value;
                 
                    document.getElementById("mytext").value =
                        document.getElementById("mytext").value + a + "-----" + "\t";
                    arr.push(checkboxes[i].value);
                }
        
                if (checkboxesLength != 0) {
                   
                    var Pre1 = document.getElementById("pre1");
                    document.getElementById("mytext").value += Pre1.innerText + "\n";
                    var pre1Value = Pre1.innerText;
                    var splitValues = pre1Value.split(" "); // Split before the space
                    var pre1Code = splitValues[0]; // Get the code part
        
                    var lastChar = pre1Code[pre1Code.length - 1]; // Get the last character
                    var incrementedChar = parseInt(lastChar) + 1; // Convert to integer and increment by 1
                    pre1Code = pre1Code.substring(0, pre1Code.length - 1) + incrementedChar; // Replace the last character with the incremented one
                      var acElements = document.querySelectorAll('.ac');
                      acElements.forEach(function(element) {
                          var value = element.value.trim();

                          var splitValue = value.split(" ");
                          var codePart = splitValue[0];
                          
                          // Check if the code part matches 'pre1Code'
                          if (pre1Code === codePart) {
                              // Perform the desired actions
                              for (var i = 0; i < checkboxes.length; i++) {
                                  var a = checkboxes[i].value;
                             
                                  document.getElementById("mytext").value =
                                      document.getElementById("mytext").value + a + "-----" + "\t";
                                  arr.push(checkboxes[i].value);
                                  flag = 1;
                                  console.log("flag==", flag);
                              }
                              document.getElementById("mytext").value += value;
                              count += checkboxesLength; // Increment count by the length of checked checkboxes
                              upcount();
                          }
                      });

                }
            } else {
                var cbarray1 = document.querySelectorAll(
                    "input[type=checkbox][class=pre1]:checked"
                );
                var cbarray1Length = cbarray1.length; // Store the length of checked checkboxes
               if (flag==0){
                count -= cbarray1Length; // Decrement count by the length of checked checkboxes
                upcount();
              }
                else{
                  count -= (cbarray1Length)*2; // Decrement count by the length of checked checkboxes
                  upcount();
                  flag=0;
                
                }
                for (var i = 0; i < cbarray1.length; i++) {
                    cbarray1[i].checked = false;
                }
            }
        }
        
        function fn_2() {
         
     
          arr = [];
          document.getElementById("mytext").value = "";
          if (document.getElementById("opt2").checked == true) {
              const cspan = document.getElementById("hrs");
              var checkboxes = document.querySelectorAll(
                  "input[type=checkbox][class=pre2]:checked"
              );
              var checkboxesLength = checkboxes.length; // Store the length of checked checkboxes
              count += checkboxesLength; // Increment count by the length of checked checkboxes
              upcount();
              for (var i = 0; i < checkboxes.length; i++) {
                  var a = checkboxes[i].value;
               
                  document.getElementById("mytext").value =
                      document.getElementById("mytext").value + a + "-----" + "\t";
                  arr.push(checkboxes[i].value);
              }
      
              if (checkboxesLength != 0) {
                 
                  var Pre1 = document.getElementById("pre2");
                  document.getElementById("mytext").value =document.getElementById("mytext").value + Pre1.innerText + "\n";
                  var pre1Value = Pre1.innerText;
                  var splitValues = pre1Value.split(" "); // Split before the space
                  var pre1Code = splitValues[0]; // Get the code part
      
                  var lastChar = pre1Code[pre1Code.length - 1]; // Get the last character
                  var incrementedChar = parseInt(lastChar) + 1; // Convert to integer and increment by 1
                  pre1Code = pre1Code.substring(0, pre1Code.length - 1) + incrementedChar; // Replace the last character with the incremented one
                    var acElements = document.querySelectorAll('.ac');
                  
                    // Loop through the 'acElements'
                    acElements.forEach(function(element) {
                      
                        // Get the value of each 'ac' element
                        var value = element.value.trim();
                        
                        // Split the value to extract the code part
                        var splitValue = value.split(" ");
                        var codePart = splitValue[0];
                        
                        // Check if the code part matches 'pre1Code'
                        if (pre1Code === codePart) {
                          flag = 1;  
                          // Perform the desired actions
                            for (var i = 0; i < checkboxes.length; i++) {
                                var a = checkboxes[i].value;
                         
                                document.getElementById("mytext").value =
                                    document.getElementById("mytext").value + a + "-----" + "\t";
                                arr.push(checkboxes[i].value);
                               
                                console.log("flag==", flag);
                            }
                            document.getElementById("mytext").value += value;
                            count += checkboxesLength; // Increment count by the length of checked checkboxes
                            upcount();
                        }
                    });

              }
          } else {
         
              var cbarray1 = document.querySelectorAll(
                  "input[type=checkbox][class=pre2]:checked"
              );
              var cbarray1Length = cbarray1.length; // Store the length of checked checkboxes
             if (flag==0){
              count -= cbarray1Length; // Decrement count by the length of checked checkboxes
              upcount();
            }
              else{
                count -= (cbarray1Length)*2; // Decrement count by the length of checked checkboxes
                upcount();
                flag=0;
              }
              for (var i = 0; i < cbarray1.length; i++) {
                  cbarray1[i].checked = false;
              }
          }
      }
      
      function fn_3() {
         
      
        arr = [];
        document.getElementById("mytext").value = "";
        if (document.getElementById("opt3").checked == true) {
            const cspan = document.getElementById("hrs");
            var checkboxes = document.querySelectorAll(
                "input[type=checkbox][class=pre3]:checked"
            );
            var checkboxesLength = checkboxes.length; // Store the length of checked checkboxes
            count += checkboxesLength; // Increment count by the length of checked checkboxes
            upcount();
            for (var i = 0; i < checkboxes.length; i++) {
                var a = checkboxes[i].value;
                document.getElementById("mytext").value =
                    document.getElementById("mytext").value + a + "-----" + "\t";
                arr.push(checkboxes[i].value);
            }
    
            if (checkboxesLength != 0) {
               
                var Pre1 = document.getElementById("pre3");
                document.getElementById("mytext").value =document.getElementById("mytext").value + Pre1.innerText + "\n";
                var pre1Value = Pre1.innerText;
                var splitValues = pre1Value.split(" "); // Split before the space
                var pre1Code = splitValues[0]; // Get the code part
    
                var lastChar = pre1Code[pre1Code.length - 1]; // Get the last character
                var incrementedChar = parseInt(lastChar) + 1; // Convert to integer and increment by 1
                pre1Code = pre1Code.substring(0, pre1Code.length - 1) + incrementedChar; // Replace the last character with the incremented one
                  var acElements = document.querySelectorAll('.ac');
                
                  // Loop through the 'acElements'
                  acElements.forEach(function(element) {
                    
                      // Get the value of each 'ac' element
                      var value = element.value.trim();
                      
                      // Split the value to extract the code part
                      var splitValue = value.split(" ");
                      var codePart = splitValue[0];
                      
                      // Check if the code part matches 'pre1Code'
                      if (pre1Code === codePart) {
                        flag = 1;  
                        // Perform the desired actions
                          for (var i = 0; i < checkboxes.length; i++) {
                              var a = checkboxes[i].value;
                              document.getElementById("mytext").value =
                                  document.getElementById("mytext").value + a + "-----" + "\t";
                              arr.push(checkboxes[i].value);
                             
                              console.log("flag==", flag);
                          }
                          document.getElementById("mytext").value += value;
                          count += checkboxesLength; // Increment count by the length of checked checkboxes
                          upcount();
                      }
                  });

            }
        } else {
          
            var cbarray1 = document.querySelectorAll(
                "input[type=checkbox][class=pre3]:checked"
            );
            var cbarray1Length = cbarray1.length; // Store the length of checked checkboxes
           if (flag==0){
            count -= cbarray1Length; // Decrement count by the length of checked checkboxes
            upcount();
          }
            else{
              count -= (cbarray1Length)*2; // Decrement count by the length of checked checkboxes
              upcount();
              flag=0;
            }
            for (var i = 0; i < cbarray1.length; i++) {
                cbarray1[i].checked = false;
            }
        }
    }
    function fn_4() {
         
    
      arr = [];
      document.getElementById("mytext").value = "";
      if (document.getElementById("opt4").checked == true) {
          const cspan = document.getElementById("hrs");
          var checkboxes = document.querySelectorAll(
              "input[type=checkbox][class=pre4]:checked"
          );
          var checkboxesLength = checkboxes.length; // Store the length of checked checkboxes
          count += checkboxesLength; // Increment count by the length of checked checkboxes
          upcount();
          for (var i = 0; i < checkboxes.length; i++) {
              var a = checkboxes[i].value;
              document.getElementById("mytext").value =
                  document.getElementById("mytext").value + a + "-----" + "\t";
              arr.push(checkboxes[i].value);
          }
  
          if (checkboxesLength != 0) {
             
              var Pre1 = document.getElementById("pre4");
              document.getElementById("mytext").value =document.getElementById("mytext").value + Pre1.innerText + "\n";
              var pre1Value = Pre1.innerText;
              var splitValues = pre1Value.split(" "); // Split before the space
              var pre1Code = splitValues[0]; // Get the code part
  
              var lastChar = pre1Code[pre1Code.length - 1]; // Get the last character
              var incrementedChar = parseInt(lastChar) + 1; // Convert to integer and increment by 1
              pre1Code = pre1Code.substring(0, pre1Code.length - 1) + incrementedChar; // Replace the last character with the incremented one
                var acElements = document.querySelectorAll('.ac');
              
                // Loop through the 'acElements'
                acElements.forEach(function(element) {
                  
                    // Get the value of each 'ac' element
                    var value = element.value.trim();
                    
                    // Split the value to extract the code part
                    var splitValue = value.split(" ");
                    var codePart = splitValue[0];
                    
                    // Check if the code part matches 'pre1Code'
                    if (pre1Code === codePart) {
                      flag = 1;  
                      // Perform the desired actions
                        for (var i = 0; i < checkboxes.length; i++) {
                            var a = checkboxes[i].value;
                            document.getElementById("mytext").value =
                                document.getElementById("mytext").value + a + "-----" + "\t";
                            arr.push(checkboxes[i].value);
                           
                            console.log("flag==", flag);
                        }
                        document.getElementById("mytext").value += value;
                        count += checkboxesLength; // Increment count by the length of checked checkboxes
                        upcount();
                    }
                });

          }
      } else {
      
          var cbarray1 = document.querySelectorAll(
              "input[type=checkbox][class=pre4]:checked"
          );
          var cbarray1Length = cbarray1.length; // Store the length of checked checkboxes
         if (flag==0){
          count -= cbarray1Length; // Decrement count by the length of checked checkboxes
          upcount();
        }
          else{
            count -= (cbarray1Length)*2; // Decrement count by the length of checked checkboxes
            upcount();
            flag=0;
          }
          for (var i = 0; i < cbarray1.length; i++) {
              cbarray1[i].checked = false;
          }
      }
  }
  function fn_5() {
         
   
    arr = [];
    document.getElementById("mytext").value = "";
    if (document.getElementById("opt5").checked == true) {
        const cspan = document.getElementById("hrs");
        var checkboxes = document.querySelectorAll(
            "input[type=checkbox][class=pre5]:checked"
        );
        var checkboxesLength = checkboxes.length; // Store the length of checked checkboxes
        count += checkboxesLength; // Increment count by the length of checked checkboxes
        upcount();
        for (var i = 0; i < checkboxes.length; i++) {
            var a = checkboxes[i].value;
            document.getElementById("mytext").value =
                document.getElementById("mytext").value + a + "-----" + "\t";
            arr.push(checkboxes[i].value);
        }

        if (checkboxesLength != 0) {
           
            var Pre1 = document.getElementById("pre5");
            document.getElementById("mytext").value =document.getElementById("mytext").value + Pre1.innerText + "\n";
            var pre1Value = Pre1.innerText;
            var splitValues = pre1Value.split(" "); // Split before the space
            var pre1Code = splitValues[0]; // Get the code part

            var lastChar = pre1Code[pre1Code.length - 1]; // Get the last character
            var incrementedChar = parseInt(lastChar) + 1; // Convert to integer and increment by 1
            pre1Code = pre1Code.substring(0, pre1Code.length - 1) + incrementedChar; // Replace the last character with the incremented one
              var acElements = document.querySelectorAll('.ac');
            
              // Loop through the 'acElements'
              acElements.forEach(function(element) {
                
                  // Get the value of each 'ac' element
                  var value = element.value.trim();
                  
                  // Split the value to extract the code part
                  var splitValue = value.split(" ");
                  var codePart = splitValue[0];
                  
                  // Check if the code part matches 'pre1Code'
                  if (pre1Code === codePart) {
                    flag = 1;  
                    // Perform the desired actions
                      for (var i = 0; i < checkboxes.length; i++) {
                          var a = checkboxes[i].value;
                        
                          document.getElementById("mytext").value =
                              document.getElementById("mytext").value + a + "-----" + "\t";
                          arr.push(checkboxes[i].value);
                         
                          console.log("flag==", flag);
                      }
                      document.getElementById("mytext").value += value;
                      count += checkboxesLength; // Increment count by the length of checked checkboxes
                      upcount();
                  }
              });

        }
    } else {
     
        var cbarray1 = document.querySelectorAll(
            "input[type=checkbox][class=pre5]:checked"
        );
        var cbarray1Length = cbarray1.length; // Store the length of checked checkboxes
       if (flag==0){
        count -= cbarray1Length; // Decrement count by the length of checked checkboxes
        upcount();
      }
        else{
          count -= (cbarray1Length)*2; // Decrement count by the length of checked checkboxes
          upcount();
          flag=0;
        }
        for (var i = 0; i < cbarray1.length; i++) {
            cbarray1[i].checked = false;
        }
    }
}

function myfn_ck() {
  clr();
  document.getElementById("mytext").value = "";
  var checkboxes = document.querySelectorAll("input[type=checkbox]:checked");
  //arr.push("Select Your Preference; Avoid Duplication");
  for (var i = 0; i < checkboxes.length; i++) {
    var a = checkboxes[i].value;
    count++;
    upcount();
    document.getElementById("mytext").value =
      document.getElementById("mytext").value + a + "\n";
    arr.push(checkboxes[i].value);
  }
  GetSel();
}

function removeElements(dd) {
  for (i = dd.length - 1; i >= 0; i--) dd.remove(i);
}

function GetSel() {
  var Pre1 = document.getElementById("pre1");
  removeElements(Pre1);
  var Pre2 = document.getElementById("pre2");
  removeElements(Pre2);
  var Pre3 = document.getElementById("pre3");
  removeElements(Pre3);
  var Pre4 = document.getElementById("pre4");
  removeElements(Pre4);
  var Pre5 = document.getElementById("pre5");
  removeElements(Pre5);
}

function clr_bt() {
  var cbarray1 = document.getElementsByName("pre1[]");
  for (var i = 0; i < cbarray1.length; i++) cbarray1[i].checked = false;
  var cbarray2 = document.getElementsByName("pre2[]");
  for (var i = 0; i < cbarray2.length; i++) cbarray2[i].checked = false;
  var cbarray3 = document.getElementsByName("pre3[]");
  for (var i = 0; i < cbarray3.length; i++) cbarray3[i].checked = false;
  var cbarray4 = document.getElementsByName("pre4[]");
  for (var i = 0; i < cbarray4.length; i++) cbarray4[i].checked = false;
  var cbarray5 = document.getElementsByName("pre5[]");
  for (var i = 0; i < cbarray5.length; i++) cbarray5[i].checked = false;
  //  SECTION
  var cbarray11 = document.getElementsByName("opt1");
  for (var i = 0; i < cbarray11.length; i++) cbarray11[i].checked = false;
  var cbarray22 = document.getElementsByName("opt2");
  for (var i = 0; i < cbarray22.length; i++) cbarray22[i].checked = false;
  var cbarray33 = document.getElementsByName("opt3");
  for (var i = 0; i < cbarray33.length; i++) cbarray33[i].checked = false;
  var cbarray44 = document.getElementsByName("opt4");
  for (var i = 0; i < cbarray44.length; i++) cbarray44[i].checked = false;
  var cbarray44 = document.getElementsByName("opt5");
  for (var i = 0; i < cbarray44.length; i++) cbarray44[i].checked = false;
    count=0;
    clcount();

  document.getElementById("mytext").value = "";
  // clr();
}

function clr() {
  var Pre1 = document.getElementById("pre1");

  var Pre2 = document.getElementById("pre2");

  var Pre3 = document.getElementById("pre3");

  var Pre4 = document.getElementById("pre4");

  var Pre5 = document.getElementById("pre5");

  document.getElementById("mytext").value = "";
  arr = [];

}
function clcount(){
  const cspan=document.getElementsByClassName('hrs');

  for (var i = 0; i < cspan.length; i++) {
      if (cspan[i].tagName === 'INPUT') {
          cspan[i].value = 0;
      } else if (cspan[i].tagName === 'SPAN') {
          cspan[i].textContent = 0;
      }
  }

        }
function ins_sub() {
  var sn = document.getElementById("staffid").value;
  if (
    op1 != "" &&
    op1 != "Select Your Preference; Avoid Duplication" &&
    op2 != "" &&
    op2 != "Select Your Preference; Avoid Duplication" &&
    op3 != "" &&
    op3 != "Select Your Preference; Avoid Duplication" &&
    op4 != "" &&
    op4 != "Select Your Preference; Avoid Duplication" &&
    op5 != "" &&
    op5 != "Select Your Preference; Avoid Duplication" &&
    sn != ""
  )
    document.getElementById("myForm").submit();
  else alert("Please Recheck your Entries !!");
}

function addElements(dd, array) {
  removeElements(dd);
  for (i = 0; i < array.length; i++) {
    var opt = document.createElement("tr");
    opt.text = array[i];
    opt.value = array[i];
    dd.add(opt);
  }
}


/*count hours 
let count=0;

const cspan=document.getElementById("hrs");
var checkboxs = document.querySelectorAll(
  "input[type=checkbox][class=pre1]:checked"
);
var checkboxs = document.querySelector(
  "#opt1"
);
checkboxs.forEach(checkbox=>{
  checkbox.addEventListener('change',function(){
    if(this.checked){
      count++;
    }
    else{
      count--;
    }
    upcount();
  })
});
function upcount(){
  cspan.textContent = count;
}
*/