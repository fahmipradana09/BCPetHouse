function initRawatInapDetail(data) {
    // Sort data by the 'date_checkup' field from newest to oldest
    data.sort((a, b) => new Date(b.date_rawatInap) - new Date(a.date_rawatInap));

    // Convert each item in the data array to a row in the spreadsheet
    var spreadsheetData = data.map(function(item) {
        return [
            item.date_rawatInap,
            item.pagi_medication,
            item.siang_medication,
            item.malam_medication,
            item.pagi_temperature,
            item.siang_temperature,
            item.malam_temperature,
            item.pagi_respiratory_rate,
            item.siang_respiratory_rate,
            item.malam_respiratory_rate,
            item.pagi_hearthbeat_rate,
            item.siang_hearthbeat_rate,
            item.malam_hearthbeat_rate,
            item.pagi_crt,
            item.siang_crt,
            item.malam_crt,
            item.pagi_turgor,
            item.siang_turgor,
            item.malam_turgor,
            item.pagi_dideaksi,
            item.siang_dideaksi,
            item.malam_dideaksi,
            item.pagi_eat_status,
            item.siang_eat_status,
            item.malam_eat_status,
            item.pagi_drink_status,
            item.siang_drink_status,
            item.malam_drink_status,
            item.pagi_note,
            item.siang_note,
            item.malam_note
        ];
    });

    spreadsheetData.unshift(new Array(31).fill(''));

    jspreadsheet(document.getElementById('rawatInapDetail'), {
        data: spreadsheetData,
        tableOverflow: true,
        pagination: 6,
        paginationOptions: [5,10],
        lazyLoading: true,
        loadingSpin: true,
        columns: [
            { type: 'text', title: 'Date Checkup', width: 200 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 75 },
            { type: 'text', title: 'Siang', width: 75 },
            { type: 'text', title: 'Malam', width: 75 },
            { type: 'text', title: 'Pagi', width: 100 },
            { type: 'text', title: 'Siang', width: 100 },
            { type: 'text', title: 'Malam', width: 100 },
            // Add more columns as necessary
        ],
        nestedHeaders:[
                        [
                            {
                                colspan: '1'
                            },
                            {
                                colspan: '3'
                            },
                            {
                                title: 'Data Fisiologis',
                                colspan: '24'
                            },
                            {
                                colspan: '3',
                            },
                            
                        ],
                        [
                            {
                                colspan: '1',
                                rowspan: '2'
                            },
                            {
                                title: 'Pengobatan',
                                colspan: '3',
                                rowspan: '2'
                            },
                           
                            {
                                title: 'TEMPERATUR (°C)',
                                colspan: '3'
                            },
                            {
                                title: 'RESP (x/MENIT)',
                                colspan: '3'
                            },
                            {
                                title: 'PULSE (x/MENIT)',
                                colspan: '3'
                            },
                            {
                                title: 'CRT (x/MENIT)',
                                colspan: '3'
                            },
                            {
                                title: 'Turgor',
                                colspan: '3'
                            },
                            {
                                title: 'Didaksi',
                                colspan: '3'
                            },
                            {
                                title: 'Eat Status',
                                colspan: '3'
                            },
                            {
                                title: 'drink Status',
                                colspan: '3'
                            },
                            {
                                title: 'Keterangan Medis',
                                colspan: '3'
                            }
                        ],
                       
                    ],
    });
}


// function initAmbulatoirDetail(data) {
//     // Sort data by the 'date_checkup' field from newest to oldest
//     data.sort((a, b) => new Date(b.date_checkup) - new Date(a.date_checkup));

//     // Convert each item in the data array to a row in the spreadsheet
//     var spreadsheetData = data.map(function(item) {
//         return [
//             item.date_checkup,
//             item.amnesa,
//             item.status_present,
//             item.clinical_finding,
//             item.diagnosis,
//             item.medication,
//             item.hospitalized_status,
//             ''
//         ];
//     });

//     spreadsheetData.unshift(new Array(8).fill(''));

//     jspreadsheet(document.getElementById('ambulatoirDetail'), {
//         data: spreadsheetData,
//         tableOverflow: true,
//         pagination: 6,
//         paginationOptions: [5,10],
//         lazyLoading: true,
//         loadingSpin: true,
//         tableWidth: '100%',
//         columns: [
//             { type: 'text', title: 'Date Checkup', width: 200 },
//             { type: 'text', title: 'Amnesa', width: 100 },
//             { type: 'text', title: 'Status Present', width: 100 },
//             { type: 'text', title: 'Clinical Finding', width: 100 },
//             { type: 'text', title: 'Diagnosis', width: 100 },
//             { type: 'text', title: 'Medication', width: 100 },
//             { type: 'text', title: 'Hospitalize Status', width: 75 },
//             { type: 'text', title: 'Action', width:200}
//             { type: 'button', title: 'Action', width: 200, readOnly: true }
//             // Add more columns as necessary
//         ],
//         nestedHeaders:[
//                         {
//                             title: 'History Ambulatoir',
//                             colspan: '7'
//                         },  
//                         { 
//                             colspan:'1'
//                         }

//                     ],
//     });
// }


function initAmbulatoirDetail(data) {
    
    // Sort data by the 'date_checkup' field from newest to oldest
    data.sort((a, b) => new Date(b.date_checkup) - new Date(a.date_checkup));

    // Convert each item in the data array to a row in the spreadsheet
    var spreadsheetData = data.map(function(item) {
        return [
            item.date_checkup,
            item.amnesa,
            item.status_present,
            item.clinical_finding,
            item.diagnosis,
            item.medication,
            item.hospitalized_status,
        ];
    });

    var customContextMenu = [
        { name: 'Copy', action: 'copy' },
        { name: 'Paste', action: 'paste' },
        { name: '---------', disabled: true }, // Separator
        { name: 'Insert Column', action: 'insertColumn' },
        { name: 'Delete Column', action: 'deleteColumn' },
        { name: '---------', disabled: true }, // Separator
        { name: 'Insert Row', action: 'insertRow' },
        { name: 'Delete Row', action: 'deleteRow' },
        { name: '---------', disabled: true }, // Separator
        { name: 'Alignment', submenu: { 
            items: [
                { name: 'Left', action: 'alignLeft' },
                { name: 'Center', action: 'alignCenter' },
                { name: 'Right', action: 'alignRight' }
            ]
        }}
    ];

    jspreadsheet(document.getElementById('ambulatoirDetail'), {
        data: spreadsheetData,  
        pagination: 6,
        paginationOptions: [5, 10],
        lazyLoading: true,  
        loadingSpin: true,
        tableWidth: '100%',
        tableOverflow: true,
        columns: [
            { type: 'text', title: 'Date Checkup', width: 240 },
            { type: 'text', title: 'Amnesa', width: 200 },
            { type: 'text', title: 'Status Present', width: 140 },
            { type: 'text', title: 'Clinical Finding', width: 140 },
            { type: 'text', title: 'Diagnosis', width: 140 },
            { type: 'text', title: 'Medication', width: 140 },
            { type: 'text', title: 'Hospitalize Status', width: 95 },
        ],
        nestedHeaders: [
            {
                title: 'History Ambulatoir',
                colspan: 7
            }
        ],
        contextMenu: customContextMenu
    });
}

// function saveRow(instance, row) {
//     var data = instance.getRowData(row);
//     // Send data to server via AJAX
//     fetch('/saveAmbulatoirDetail', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(data)
//     }).then(response => response.json())
//     .then(result => {
//         if (result.success) {
//             alert('Data saved successfully');
//             // Optionally reload data or update the table
//         } else {
//             alert('Failed to save data');
//         }
//     }).catch(error => {
//         console.error('Error:', error);
//     });
// }



// function saveFisiologisData(data) {
//     // Send an AJAX request to the server
//     fetch('rawatInap/saveFisiologis', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify(data),
//     })
//     .then(response => {
//         if (!response.ok) {
//             throw new Error('Failed to save data.');
//         }
//         return response.json();
//     })
//     .then(data => {
//         console.log(data.message); // Success message from the server
//     })
//     .catch(error => {
//         console.error(error.message); // Error message if request fails
//     });
// }

function saveFisiologiAmbulatoirData(instance, row, petId) {
    var rowData = instance.getRowData(row);
    var data = {
        date_checkup: rowData[0],
        amnesa: rowData[1],
        status_present: rowData[2],
        clinical_finding: rowData[3],
        diagnosis: rowData[4],
        medication: rowData[5],
        hospitalized_status: rowData[6]
    };
    
    dd(data);

fetch(`/PetList/save/${petId}`, {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
})
.then(response => response.json())
.then(data => {
    if (data.success) {
        alert('Data saved successfully!');
        // Optionally, reload the table or update the UI to reflect the saved data
    } else {
        alert('Failed to save data: ' + JSON.stringify(data.errors));
    }
})
.catch(error => {
    console.error('Error:', error);
});
}