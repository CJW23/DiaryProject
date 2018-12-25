//팩맨 패턴 게임 소스
var password = [1, 2, 5, 6];
var pass = new Array();
var ndcount = 0;
var flag = 0;
var flag2 = 1;
var flag3 = 1;
var interval;
var lg = 2;
var i = 75;
var direction = 0;
var x = 75, y = 75;
var pacleft = 75, pactop = 75;
var ndflag = [1, 1, 1, 1, 1, 1, 1, 1, 1];
var ps = new Array();       //설정비번 저장할 배열
function search(x, y) {
    if (x == 75 && 75 == y) {
        return 1;
    }
    else if (x == 250 && y == 75) {
        return 2;
    }
    else if (x == 425 && y == 75) {
        return 3;
    }
    else if (x == 75 && y == 250) {
        return 4;
    }
    else if (x == 250 && y == 250) {
        return 5;
    }
    else if (x == 425 && y == 250) {
        return 6;
    }
    else if (x == 75 && y == 425) {
        return 7;
    }
    else if (x == 250 && y == 425) {
        return 8;
    }
    else if (x == 425 && y == 425) {
        return 9;
    }

}
function move() {

    if (pacleft > x) {
        flag = 0;
        pacleft--;
        document.getElementById("pac").style.left = pacleft + "px";
        if ((x + 50) == (pacleft - 50)) {
            ndflag[search(x, y) - 1] = 0;

        }
    }
    else if (pacleft < x) {
        flag = 0;
        pacleft++;
        document.getElementById("pac").style.left = pacleft + "px";
        if ((x - 50) == (pacleft + 50)) {
            ndflag[search(x, y) - 1] = 0;
        }
    }
    else if (pactop > y) {
        flag = 0;
        pactop--;
        document.getElementById("pac").style.top = pactop + "px";
        if ((y + 50) == (pactop - 50)) {
            ndflag[search(x, y) - 1] = 0;
        }
    }
    else if (pactop < y) {
        flag = 0;
        pactop++;
        document.getElementById("pac").style.top = pactop + "px";
        if ((y - 50) == (pactop + 50)) {
            ndflag[search(x, y) - 1] = 0;
        }
    }
    else {
        flag = 1;

        if (pacleft == 75 && 75 == pactop && flag2 == 1) {
            flag2 = 0;
            pass.push('1');
            ps.push('1');
            ndcount += 1;
            ndflag[search(x, y) - 1] = 0;
        }
        else if (pacleft == 250 && pactop == 75 && flag2 == 1) {
            flag2 = 0;
            pass.push('2');
            ps.push('2');
            ndcount += 1;
        }
        else if (pacleft == 425 && pactop == 75 && flag2 == 1) {
            flag2 = 0;
            pass.push('3');
            ps.push('3');
            ndcount += 1;
        }
        else if (pacleft == 75 && pactop == 250 && flag2 == 1) {
            flag2 = 0;
            pass.push('4');
            ps.push('4');
            ndcount += 1;
        }
        else if (pacleft == 250 && pactop == 250 && flag2 == 1) {
            flag2 = 0;
            pass.push('5');
            ps.push('5');
            ndcount += 1;
        }
        else if (pacleft == 425 && pactop == 250 && flag2 == 1) {
            flag2 = 0;
            pass.push('6');
            ps.push('6');
            ndcount += 1;
        }
        else if (pacleft == 75 && pactop == 425 && flag2 == 1) {
            flag2 = 0;
            pass.push('7');
            ps.push('7');
            ndcount += 1;
        }
        else if (pacleft == 250 && pactop == 425 && flag2 == 1) {
            flag2 = 0;
            pass.push('8');
            ps.push('8');
            ndcount += 1;
        }
        else if (pacleft == 425 && pactop == 425 && flag2 == 1) {
            flag2 = 0;
            pass.push('9');
            ps.push('9');
            ndcount += 1;
        }
    }
    remove();
    drt();

}
function remove() {     //몬스터 처치

    if (ndflag[0] == 0) {
        document.getElementById("mst1").src = "ghost_1.png";
    }
    if (ndflag[1] == 0) {
        document.getElementById("mst2").src = "ghost_1.png";
    }
    if (ndflag[2] == 0) {
        document.getElementById("mst3").src = "ghost_1.png";
    }
    if (ndflag[3] == 0) {
        document.getElementById("mst4").src = "ghost_1.png";
    }
    if (ndflag[4] == 0) {
        document.getElementById("mst5").src = "ghost_1.png";
    }
    if (ndflag[5] == 0) {
        document.getElementById("mst6").src = "ghost_1.png";
    }
    if (ndflag[6] == 0) {
        document.getElementById("mst7").src = "ghost_1.png";
    }
    if (ndflag[7] == 0) {
        document.getElementById("mst8").src = "ghost_1.png";
    }
    if (ndflag[8] == 0) {
        document.getElementById("mst9").src = "ghost_1.png";
    }
}
function drt() {        //방향
    if (direction == 0 && flag3 == 0) {
        document.getElementById("pac").src = "front.gif";
        flag3 = 1;
    }
    else if (direction == 1 && flag3 == 0) {
        document.getElementById("pac").src = "down.gif";
        flag3 = 1;
    }
    else if (direction == 2 && flag3 == 0) {
        document.getElementById("pac").src = "back.gif";
        flag3 = 1;
    }
    else if (direction == 3 && flag3 == 0) {
        document.getElementById("pac").src = "up.gif";
        flag3 = 1;
    }
}
function start() {

    interval = setInterval(function () { move(); }, 0);
}

function doKeyDown(evt) {
    switch (evt.keyCode) {
        case 13:
            alert('a');
            inputpw();
            break;
        case 38:  /* Up arrow was pressed */
            if (y > 75 && flag == 1) {
                direction = 3;
                flag2 = 1;
                flag3 = 0;
                y -= 175;
            }
            break;
        case 40:  /* Down arrow was pressed */
            if (y < 425 && flag == 1) {
                direction = 1;
                flag2 = 1;
                flag3 = 0;
                y += 175;
            }
            break;
        case 37:  /* Left arrow was pressed */
            if (x > 75 && flag == 1) {
                direction = 2;
                flag2 = 1;
                flag3 = 0;
                x -= 175;
            }
            break;
        case 39:  /* Right arrow was pressed */
            if (x < 425 && flag == 1) {
                direction = 0;
                flag2 = 1;
                flag3 = 0;
                x += 175;
            }
            break;



    }
}
window.addEventListener('keydown', doKeyDown, true);
function set() {
    var tmp = 1;
    for (i = 1; i < ps.length; i++) {
        tmp = tmp + ps[i];
    }
    document.getElementById("pss").value = tmp;
    document.getElementById("sub").submit();
}
function inputpw() {
    var tmp = 1;
    for (i = 1; i < pass.length; i++) {
        tmp = tmp + pass[i];
    }
    document.getElementById("inputpw").value = tmp;
    document.getElementById("lgin").submit();
}
function reset() {
    for (i = 0; i < 9; i++) {
        ndflag[i] = 1;
    }
    x = 75;
    y = 75;
    flag = 0;
    flag2 = 1;
    flag3 = 1;
    direction = 0;
    lg = 2;
    pacleft = 75;
    pactop = 75;
    document.getElementById("pac").src = "front.gif";
    document.getElementById("pac").style.left = "75px";
    document.getElementById("pac").style.top = "75px";
    document.getElementById("mst1").src = "monster.gif";
    document.getElementById("mst2").src = "monster.gif";
    document.getElementById("mst3").src = "monster.gif";
    document.getElementById("mst4").src = "monster.gif";
    document.getElementById("mst5").src = "monster.gif";
    document.getElementById("mst6").src = "monster.gif";
    document.getElementById("mst7").src = "monster.gif";
    document.getElementById("mst8").src = "monster.gif";
    document.getElementById("mst9").src = "monster.gif";
    clearInterval(interval);
    pass.splice(0, pass.length);
    start();
}

