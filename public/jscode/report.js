
async function SearchReport(){
let start_date=new Date(document.getElementById("start_date").value)
let end_date=new Date(document.getElementById("end_date").value)

let differenceInTime = end_date - start_date;
let differenceInDays = differenceInTime / (1000 * 3600 * 24);
// console.log(start_date)
// console.log(differenceInDays)
if(document.getElementById("start_date").value === ''){
    error('start date required')
}else if(document.getElementById("end_date").value === ''){
    error('end date required')

}else{

    fillReportData()

    // res.data.forEach(function(item){
    //     console.log(item)

    // })

    // window.location.href="/download-page"


    // $("#report").on('click',function(){
        $("#Report-download-Modal").modal('show')
        console.log("Hiii")
    // })

}

}


async function fillReportData(){

    let start_date= document.getElementById("start_date").value
    let end_date=document.getElementById("end_date").value
    let res=await axios.post('/total-report',{start_date:start_date,end_date:end_date})
    console.log(res.data['total'])

    let datatable=$("#TableData")
    let tablelist=$("#TableList")

    datatable.DataTable().destroy()
    tablelist.empty()
    // res.data.forEach(function(item){
    //     console.log(item)
        let row=`
        <tr>
        <td>sales Report</td>
        <td>${start_date} to ${end_date}</td>
        <td>${res.data['total']}</td>
        <td>${res.data['discount']}</td>
        <td>${res.data['vat']}</td>
        <td>${res.data['payable']}</td>

        </tr>
        `
        tablelist.append(row)
    // })


    let res1=await axios.post('/details-report',{start_date:start_date,end_date:end_date})
    console.log(res1)

    let datatable1=$("#TableData1")
    let tablelist1=$("#TableList1")

    datatable1.DataTable().destroy()
    tablelist1.empty()
    res1.data.forEach(function(item){
        console.log(item)

        let date =new Date(item['created_at']);
        console.log(date)
        let year = date.getFullYear();
        let month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based, so add 1
        let day = String(date.getDate()).padStart(2, '0');

        let formattedDate = `${year}-${month}-${day}`;

        let row=`
        <tr>
        <td>${item['customer']['name']}</td>
        <td>${item['customer']['email']}</td>
        <td>${formattedDate}</td>
        <td>${item['total']}</td>
        <td>${item['discount']}</td>
        <td>${item['vat']}</td>
        <td>${item['payable']}</td>
        </tr>
        `
        tablelist1.append(row)
    })


}


async function DownloadPDF(){
     // Select the element you want to convert to PDF
     const element = document.getElementById('pdfContent').innerHTML;

     // Set options for the PDF
     const options = {
         margin:       0.5,  // inches
         filename:     'report.pdf',
         image:        { type: 'jpeg', quality: 0.98 },
         html2canvas:  { scale: 2},
         jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
     };

     // Generate and download the PDF
     html2pdf().set(options).from(element).save();
}
