// function move(e, prev, curr, next) {
//     var length = document.getElementById(curr).value.length;
//     var maxlength = document.getElementById(curr).getAttribute("maxlength")
//     if (length == maxlength) {
//         if (next !== "") {
//             document.getElementById(next).focus();
//         }
//     }
//     if (e.key ==="Backspace"){
//         if (prev !== ""){
//             document.getElementById(prev).focus();
//         }
//     }
// }

function changetext()
{
    document.getElementsByName('GSTIN')[0].placeholder='*Enter pan number';
    document.getElementById('hs3').innerHTML="PAN is required to sell books on Flipkart. You can also share it in the final step";
}

function oldtext()
{
    document.getElementsByName('GSTIN')[0].placeholder='*Enter GSTN';
    document.getElementById('hs3').innerHTML="GSTIN is required to sell products on Flipkart. You can also share it in the final step";
      
        }
     
