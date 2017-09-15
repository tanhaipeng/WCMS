/**
 * Created by tanhaipeng on 2017/8/31.
 */

// php api config
var push_api = "http://tanhp.com/wx/index.php/push/exec";
var del_api = "http://tanhp.com/wx/index.php/admin/delacc";

$(document).ready(function () {
    // register event
    $("#push_btn").click(function () {
        sendPush();
    });
    // checkbox event
    $("#check_all").click(function () {
        selectCheck();
    });
    // search
    $("#search_btn").click(function () {
        var url = "http://tanhp.com/wx/index.php/admin/wacc?sc=" + $("#search_input").val();
        window.location = url;
    });
});

function sendPush() {
    var content = $("#push_content").val();
    var account = getAccounts();
    if (account.length > 0 && content != "") {
        console.log(content);
        console.log(account.toString());
        $.get(push_api, {
            account: account.toString(),
            content: content
        }, function (result) {
            alert('推送成功');
        });
    }
}

function selectCheck() {
    if ($("#check_all").is(":checked")) {
        $(":checkbox").each(function () {
            $(this).prop('checked', true);
        });
    } else {
        $(":checkbox").each(function () {
            $(this).prop('checked', false);
        });
    }
}

function getAccounts() {
    var accounts = [];
    $(":checkbox").each(function () {
        if ($(this).is(":checked")) {
            if ($(this).attr('value') != "all") {
                accounts.push($(this).attr('value'))
            }
        }
    });
    return accounts;
}

function delAcccount(account) {
    if (account) {
        $.post(del_api, {acc: account}, function (result) {
            console.log(result);
            console.log(account);
            window.location.reload();
        });
    }
}