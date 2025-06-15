let mbd1 = document.querySelector(".mbd1");
let mbd2 = document.querySelector(".mbd2");
let mbd3 = document.querySelector(".mbd3");
let mbd4 = document.querySelector(".mbd4");
let mbd5 = document.querySelector(".mbd5");
let add = document.querySelector(".add");
let i = 0;
const format = (a) => {
    // date
    i++;
    let j = 0;
    let mdateBox = document.createElement("div");
    mdateBox.style.width = "100%";
    mdateBox.style.height = "auto";
    mdateBox.style.display = "flex";
    mdateBox.style.flexDirection = "column";
    mbd1.appendChild(mdateBox);

    let dateBox = document.createElement("div");
    dateBox.style.width = "100%";
    dateBox.style.height = "120px";
    dateBox.style.display = "flex";
    dateBox.style.justifyContent = "center";
    mdateBox.appendChild(dateBox);

    let date = document.createElement("input");
    date.style.width = "60%";
    date.style.height = "20px";
    date.style.border = "none";
    date.style.backgroundColor = "white";
    date.type = "date";
    date.style.alignSelf = "top";
    date.setAttribute("name", "date" + i);


    dateBox.appendChild(date);
    // date

    // particulars
    let prticlrsBox = document.createElement("div");
    prticlrsBox.style.width = "100%";
    prticlrsBox.style.height = "auto";
    if (a == 1) {
        prticlrsBox.style.borderTop = "2px dotted black";
    }

    mbd2.appendChild(prticlrsBox);

    let prticlrs = document.createElement("div");
    prticlrs.style.width = "90%";
    prticlrs.style.margin = "auto";
    prticlrs.style.height = "100%";
    prticlrsBox.appendChild(prticlrs);

    // cr

    let crAmtbox = document.createElement("div");
    crAmtbox.style.width = "100%";
    crAmtbox.style.height = "auto";
    mbd5.appendChild(crAmtbox);

    let crAmt1 = document.createElement("div");
    crAmt1.style.width = "90%";
    crAmt1.style.height = "auto";
    crAmt1.style.display = "flex";
    crAmt1.style.flexDirection = "column";
    crAmt1.style.alignItems = "center";
    crAmtbox.appendChild(crAmt1);

    let crAmt = document.createElement("div");
    crAmt.style.width = "100%";
    crAmt.style.height = "20px";
    crAmt.style.border = "none";
    crAmt.style.backgroundColor = "white";
    crAmt.type = "number";
    crAmt1.appendChild(crAmt);

    // cr end

    let dr = document.createElement("div");
    dr.style.width = "100%";
    dr.style.height = "auto";
    prticlrs.appendChild(dr);

    let drbox = document.createElement("div");
    drbox.style.width = "100%";
    drbox.style.height = "auto";

    dr.appendChild(drbox);


    let ndl = document.createElement("div");
    ndl.style.width = "100%";
    ndl.style.height = "auto";
    ndl.style.display = "flex";
    ndl.style.justifyContent = "flex-end";
    dr.appendChild(ndl);

    let newDr = document.createElement("button");
    newDr.style.width = "15px";
    newDr.style.height = "15px";
    newDr.style.backgroundColor = "#bbb";
    newDr.type = "button";
    newDr.style.display = "flex";
    newDr.style.justifyContent = "center";
    newDr.style.alignItems = "center";
    newDr.style.borderRadius = "20%";
    newDr.style.border = "1px solid #999 ";
    newDr.innerHTML = "+";
    ndl.appendChild(newDr);

    let dr1 = document.createElement("div");
    dr1.style.width = "100%";
    dr1.style.height = "auto";
    dr1.style.display = "flex";
    drbox.appendChild(dr1);

    let drIn = document.createElement("input");
    drIn.style.width = "60%";
    drIn.style.height = "20px";
    drIn.style.border = "none";
    drIn.style.backgroundColor = "white";
    dr1.appendChild(drIn);
    drIn.setAttribute("name", "drInput" + i);

    let drp = document.createElement("p");
    drp.innerHTML = "a/c......Dr.";
    dr1.appendChild(drp);
    // debit
    let drAmtbox = document.createElement("div");
    drAmtbox.style.width = "100%";
    drAmtbox.style.height = "auto";
    mbd4.appendChild(drAmtbox);

    let drAmt1 = document.createElement("div");
    drAmt1.style.width = "90%";
    drAmt1.style.height = "auto";
    drAmt1.style.display = "flex";
    drAmt1.style.flexDirection = "column";
    drAmt1.style.alignItems = "center";
    drAmtbox.appendChild(drAmt1);

    let drAmt = document.createElement("input");
    drAmt.style.width = "100%";
    drAmt.style.height = "20px";
    drAmt.style.border = "none";
    drAmt.style.backgroundColor = "white";
    drAmt.type = "number";
    drAmt1.appendChild(drAmt);
    drAmt.setAttribute("name", "drAmt" + i);



    let f = document.createElement("div");
    f.style.width = "100%";
    f.style.height = "auto";
    mbd3.appendChild(f);

    let f1 = document.createElement("div");
    f1.style.width = "90%";
    f1.style.height = "auto";
    f.appendChild(f1);

    let fn1 = document.createElement("input");
    fn1.style.width = "100%";
    fn1.style.height = "20px";
    fn1.style.border = "none";
    fn1.style.backgroundColor = "white";
    fn1.type = "number";
    f1.appendChild(fn1);
    fn1.setAttribute("name", "drLF" + i);



    // debit end



    newDr.addEventListener("click", () => {
        j++;
        let dr1 = document.createElement("div");
        dr1.style.width = "100%";
        dr1.style.height = "auto";
        dr1.style.display = "flex";
        drbox.appendChild(dr1);


        let drIn = document.createElement("input");
        drIn.style.width = "60%";
        drIn.style.height = "20px";
        drIn.style.border = "none";
        drIn.style.backgroundColor = "white";
        dr1.appendChild(drIn);
        drIn.setAttribute("name", "drInput" + i + j);

        let drp = document.createElement("p");
        drp.innerHTML = "a/c......Dr.";
        dr1.appendChild(drp);

        let date1 = document.createElement("div");
        date1.style.width = "100%";
        date1.style.height = "20px";


        mdateBox.appendChild(date1);

        let drAmt = document.createElement("input");
        drAmt.style.width = "100%";
        drAmt.style.height = "20px";
        drAmt.style.border = "none";
        drAmt.style.backgroundColor = "white";
        drAmt.type = "number";
        drAmt1.appendChild(drAmt);
        drAmt.setAttribute("name", "drAmt" + i + j);

        let crAmt = document.createElement("div");
        crAmt.style.width = "100%";
        crAmt.style.height = "20px";
        crAmt.style.border = "none";
        crAmt.style.backgroundColor = "white";
        crAmt.type = "number";
        crAmt1.appendChild(crAmt);

        let fn1 = document.createElement("input");
        fn1.style.width = "100%";
        fn1.style.height = "20px";
        fn1.style.border = "none";
        fn1.style.backgroundColor = "white";
        fn1.type = "number";
        f1.appendChild(fn1);
        fn1.setAttribute("name", "drLF" + i + j);

        let jI = document.createElement("input");
        jI.style.width = "60%";
        jI.style.height = "20px";
        jI.style.border = "none";
        jI.style.display = "none";
        jI.style.backgroundColor = "white";
        cr1.appendChild(jI);
        jI.setAttribute("name", "jI");
        jI.setAttribute("value", j);
    }
    );
    let fdn1 = document.createElement("div");
    fdn1.style.width = "100%";
    fdn1.style.height = "20px";
    f.appendChild(fdn1);

    let dr1Amt = document.createElement("div");
    dr1Amt.style.width = "100%";
    dr1Amt.style.height = "20px";
    dr1Amt.style.backgroundColor = "white";
    drAmtbox.appendChild(dr1Amt);

    let drAmt2 = document.createElement("div");
    drAmt2.style.width = "90%";
    drAmt2.style.height = "auto";
    drAmt2.style.display = "flex";
    drAmt2.style.flexDirection = "column";
    drAmt2.style.alignItems = "center";
    drAmtbox.appendChild(drAmt2);

    let dr2Amt = document.createElement("div");
    dr2Amt.style.width = "100%";
    dr2Amt.style.height = "20px";
    dr2Amt.style.backgroundColor = "white";
    drAmt2.appendChild(dr2Amt);

    let cr1Amt = document.createElement("div");
    cr1Amt.style.width = "100%";
    cr1Amt.style.height = "20px";
    cr1Amt.style.border = "none";
    cr1Amt.style.backgroundColor = "white";
    cr1Amt.type = "number";
    crAmtbox.appendChild(cr1Amt);


    let cr = document.createElement("div");
    cr.style.width = "100%";
    cr.style.height = "auto";
    prticlrs.appendChild(cr);

    let crbox = document.createElement("div");
    crbox.style.width = "100%";
    crbox.style.height = "auto";
    cr.appendChild(crbox);

    let ncl = document.createElement("div");
    ncl.style.width = "100%";
    ncl.style.height = "auto";
    ncl.style.display = "flex";
    ncl.style.justifyContent = "flex-end";
    cr.appendChild(ncl);

    let newCr = document.createElement("button");
    newCr.style.width = "15px";
    newCr.style.height = "15px";
    newCr.style.backgroundColor = "#bbb";
    newCr.style.display = "flex";
    newCr.type = "button";
    newCr.style.justifyContent = "center";
    newCr.style.alignItems = "center";
    newCr.style.borderRadius = "20%";
    newCr.style.border = "1px solid #999 ";
    newCr.innerHTML = "+";
    ncl.appendChild(newCr);

    let cr1 = document.createElement("div");
    cr1.style.width = "100%";
    cr1.style.height = "auto";
    cr1.style.display = "flex";
    crbox.appendChild(cr1);

    let crp1 = document.createElement("p");
    crp1.innerHTML = "To";
    cr1.appendChild(crp1);



    let crIn = document.createElement("input");
    crIn.style.width = "60%";
    crIn.style.height = "20px";
    crIn.style.margin = "0 10px";
    crIn.style.border = "none";
    crIn.style.backgroundColor = "white";
    cr1.appendChild(crIn);
    crIn.setAttribute("name", "crInput" + i);

    let crp2 = document.createElement("p");
    crp2.innerHTML = "a/c";
    cr1.appendChild(crp2);


    // credit

    let crAmt2 = document.createElement("div");
    crAmt2.style.width = "90%";
    crAmt2.style.height = "auto";
    crAmt2.style.display = "flex";
    crAmt2.style.flexDirection = "column";
    crAmt2.style.alignItems = "center";
    crAmtbox.appendChild(crAmt2);

    let cr2Amt = document.createElement("input");
    cr2Amt.style.width = "100%";
    cr2Amt.style.height = "20px";
    cr2Amt.style.backgroundColor = "white";
    cr2Amt.style.border = "none";
    cr2Amt.type = "number";
    crAmt2.appendChild(cr2Amt);
    cr2Amt.setAttribute("name", "crAmt" + i);
    // credit end

    let f2 = document.createElement("div");
    f2.style.width = "90%";
    f2.style.height = "auto";
    f.appendChild(f2);

    let fn2 = document.createElement("input");
    fn2.style.width = "100%";
    fn2.style.height = "20px";
    fn2.style.border = "none";
    fn2.style.backgroundColor = "white";
    fn2.type = "number";
    f2.appendChild(fn2);
    fn2.setAttribute("name", "crLF" + i);
    let k = 0;

    newCr.addEventListener("click", () => {
        k++;

        let cr1 = document.createElement("div");
        cr1.style.width = "100%";
        cr1.style.height = "auto";
        cr1.style.display = "flex";
        crbox.appendChild(cr1);

        let crp1 = document.createElement("p");
        crp1.innerHTML = "To";
        cr1.appendChild(crp1);

        let crIn = document.createElement("input");
        crIn.style.width = "60%";
        crIn.style.height = "20px";
        crIn.style.margin = "0 10px";
        crIn.style.border = "none";
        crIn.style.backgroundColor = "white";
        cr1.appendChild(crIn);
        crIn.setAttribute("name", "crInput" + i + k);

        let crp2 = document.createElement("p");
        crp2.innerHTML = "a/c";
        cr1.appendChild(crp2);

        let date1 = document.createElement("div");
        date1.style.width = "100%";
        date1.style.height = "20px";


        mdateBox.appendChild(date1);

        let dr2Amt = document.createElement("div");
        dr2Amt.style.width = "100%";
        dr2Amt.style.height = "20px";
        dr2Amt.style.backgroundColor = "white";
        drAmt2.appendChild(dr2Amt);

        let cr2Amt = document.createElement("input");
        cr2Amt.style.width = "100%";
        cr2Amt.style.height = "20px";
        cr2Amt.style.backgroundColor = "white";
        cr2Amt.style.border = "none";
        cr2Amt.type = "number";
        crAmt2.appendChild(cr2Amt);
        cr2Amt.setAttribute("name", "crAmt" + i + k);

        let fn2 = document.createElement("input");
        fn2.style.width = "100%";
        fn2.style.height = "20px";
        fn2.style.border = "none";
        fn2.style.backgroundColor = "white";
        fn2.type = "number";
        f2.appendChild(fn2);
        fn2.setAttribute("name", "crLF" + i + k);

        let kI = document.createElement("input");
        kI.style.width = "60%";
        kI.style.height = "20px";
        kI.style.border = "none";
        kI.style.display = "none";
        kI.style.backgroundColor = "white";
        cr1.appendChild(kI);
        kI.setAttribute("name", "kI");
        kI.setAttribute("value", k);
    }
    );

    let fdn2 = document.createElement("div");
    fdn2.style.width = "100%";
    fdn2.style.height = "62px";
    fdn2.style.marginBottom = "4px";
    f.appendChild(fdn2);

    let dr3Amt = document.createElement("div");
    dr3Amt.style.width = "100%";
    dr3Amt.style.height = "62px";
    dr3Amt.style.marginBottom = "4px";
    dr3Amt.style.backgroundColor = "white";
    drAmtbox.appendChild(dr3Amt);

    let cr3Amt = document.createElement("div");
    cr3Amt.style.width = "100%";
    cr3Amt.style.height = "60px";
    cr3Amt.style.backgroundColor = "white";
    cr3Amt.style.marginBottom = "4px";
    crAmtbox.appendChild(cr3Amt);


    let prtrsn = document.createElement("div");
    prtrsn.style.width = "100%";
    prtrsn.style.height = "auto";
    prticlrs.appendChild(prtrsn);

    let prtp1 = document.createElement("p");
    prtp1.style.width = "auto";
    prtp1.style.height = "100%";
    prtp1.innerHTML = "(Being";
    prtrsn.appendChild(prtp1);

    let prtrsnIn = document.createElement("input");
    prtrsnIn.style.width = "80%";
    prtrsnIn.style.height = "100%";
    prtrsnIn.style.border = "none";
    prtrsnIn.style.backgroundColor = "white";
    prtrsn.appendChild(prtrsnIn);
    prtrsnIn.setAttribute("name", "particularsReason" + i);

    let prtp2 = document.createElement("p");
    prtp1.style.width = "auto";
    prtp1.style.height = "100%";
    prtp2.innerHTML = ")";
    prtrsn.appendChild(prtp2);

    let iI = document.createElement("input");
    iI.style.width = "60%";
    iI.style.height = "20px";
    iI.style.border = "none";
    iI.style.display = "none";
    iI.style.backgroundColor = "white";
    cr1.appendChild(iI);
    iI.setAttribute("name", "iI");
    iI.setAttribute("value", i);


    // particulars end

}





format(0);
add.addEventListener("click", () => {

    format(1);

});

