$(function () {
    $(".lined").linedtextarea({
        selectedLine: ""
    });

    // ドラッグオーバー時のイベント
    $('#drop-area').on('dragover', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('hover');
    });

    // ドラッグエンター時のイベント
    $('#drop-area').on('dragenter', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('hover');
    });

    // ドラッグリーブ時のイベント
    $('#drop-area').on('dragleave', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('hover');
    });

    // ドロップ時のイベント
    $('#drop-area').on('drop', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('hover');

        var files = e.originalEvent.dataTransfer.files;
        // ドロップされたファイルに対する処理を実行
        if ($("#textarea").val().trim() !== "") {
            var result = confirm("既存の文字列を上書きしますか？");
            if (result) {
                handleFiles(files); 
            }
        } else {
            handleFiles(files);
        }
    });

    // ドロップされたファイルに対する処理を実行する関数
    function handleFiles(files) {
        // ドロップされたファイルの情報を表示
        for (var i = 0; i < files.length; i++) {
            // 添付ファイル名セット
            $('.gram-name').text(files[i].name);

            var reader = new FileReader();
            reader.onload = function (event) {
                var contents = event.target.result;
                $('#textarea').val(contents);
            };

            reader.readAsText(files[i]);
        }
    }    
});

function handleDownload() {
    var content = $('#textarea').val();
    var blob = new Blob([ content ], { "type" : "text/plain" });

    // windowsの場合ダイアログ表示
    var userAgent = navigator.userAgent;
    if (userAgent.indexOf("Win") !== -1) {
        alert("保存先フォルダのパスと保存するグラマ名の合計文字数がWindowsの定める上限を超えます。保存先を変更するか、グラマ名を短くするなどしてください。");
    } 

    if (window.navigator.msSaveBlob) { 
        window.navigator.msSaveBlob(blob, "basic.gram"); 

        // IE10/11 msSaveOrOpenBlobの場合はファイルを保存せずに開ける
        window.navigator.msSaveOrOpenBlob(blob, "basic.gram"); 
    } else {
        document.getElementById("download").href = window.URL.createObjectURL(blob);
    }
}
