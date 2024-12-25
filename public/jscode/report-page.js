// fillReportData()
// async function fillReportData(){

//     let start_date= document.getElementById("start_date").value
//     let end_date=document.getElementById("end_date").value
//     let res=await axios.post('/total-report',{start_date:start_date,end_date:end_date})
//     console.log(res.data['total'])

//     let datatable=$("#TableData222")
//     let tablelist=$("#TableList222")

//     datatable.DataTable().destroy()
//     tablelist.empty()
//     // res.data.forEach(function(item){
//     //     console.log(item)
//         let row=`
//         <tr>
//         <td>sales Report</td>
//         <td>${start_date} to ${end_date}</td>
//         <td>${res.data['total']}</td>
//         <td>${res.data['discount']}</td>
//         <td>${res.data['vat']}</td>
//         <td>${res.data['payable']}</td>

//         </tr>
//         `
//         tablelist.append(row)
//     // })


//     let res1=await axios.post('/details-report',{start_date:start_date,end_date:end_date})
//     console.log(res1)

//     let datatable1=$("#TableData111")
//     let tablelist1=$("#TableList111")

//     datatable1.DataTable().destroy()
//     tablelist1.empty()
//     res1.data.forEach(function(item){
//         // let date =new Date(item['created_at']);

//         // let year = date.getFullYear();
//         // let month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based, so add 1
//         // let day = String(date.getDate()).padStart(2, '0');

//         // let formattedDate = `${year}-${month}-${day}`;

//         // console.log("formated date")
//         // console.log(formattedDate)
//         console.log(item['created_at'])

//         let row=`
//         <tr>
//         <td>${item['customer']['name']}</td>
//         <td>${item['customer']['email']}</td>
//         <td></td>
//         <td>${item['total']}</td>
//         <td>${item['discount']}</td>
//         <td>${item['vat']}</td>
//         <td>${item['payable']}</td>
//         </tr>
//         `
//         tablelist1.append(row)
//     })


// }


// async function DownloadPDF(){
//      // Select the element you want to convert to PDF
//      const element = document.getElementById('pdfContent').innerHTML;

//      // Set options for the PDF
//      const options = {
//          margin:       0.5,  // inches
//          filename:     'report.pdf',
//          image:        { type: 'jpeg', quality: 0.98 },
//          html2canvas:  { scale: 2 },
//          jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
//      };

//      // Generate and download the PDF
//      html2pdf().set(options).from(element).save();
// }
