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

function saveFisiologisData(data) {
    // Send an AJAX request to the server
    fetch('rawatInap/saveFisiologis', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Failed to save data.');
        }
        return response.json();
    })
    .then(data => {
        console.log(data.message); // Success message from the server
    })
    .catch(error => {
        console.error(error.message); // Error message if request fails
    });
}