let body = document.querySelector("body");

let ledger = (acname) => {
    let section = document.createElement("section");
    body.appendChild(section);


    let divh = document.createElement("div");

    divh.style.width = "100%";
    divh.style.height = "auto";
    divh.style.display = "flex";
    divh.style.justifyContent = "center";
    divh.style.alignItems = "center";
    section.appendChild(divh);

    divh.className = "header";

    let h = document.createElement("h1");
    h.innerText = acname + " " + "Account";
    divh.appendChild(h);

    let div = document.createElement("div");
    section.appendChild(div);
    div.className = "container";

    // date
    let date = document.createElement("div");
    date.className = "inbox";
    date.style.width = "14%";
    div.appendChild(date);

    let dth = document.createElement("div");
    dth.className = "hib";
    date.appendChild(dth);

    let h1 = document.createElement("h3");
    h1.innerText = "Date";
    dth.appendChild(h1);


    let dtb = document.createElement("div");
    dtb.className = "mmbd";
    date.appendChild(dtb);

    // date end


    // particulars
    let particulars = document.createElement("div");
    particulars.className = "inbox";
    particulars.style.width = "50%";
    div.appendChild(particulars);

    let prtclrsh = document.createElement("div");
    prtclrsh.className = "hib";
    particulars.appendChild(prtclrsh);

    let h2 = document.createElement("h3");
    h2.innerText = "Particulars";
    prtclrsh.appendChild(h2);

    let prtclrsb = document.createElement("div");
    prtclrsb.className = "mmbd";
    particulars.appendChild(prtclrsb);

    // particulars end


    // voucher no
    let jf = document.createElement("div");
    jf.className = "inbox";
    jf.style.width = "4%";
    div.appendChild(jf);

    let jfh = document.createElement("div");
    jfh.className = "hib";
    jf.appendChild(jfh);

    let h3 = document.createElement("h3");
    h3.innerText = "J.F.";
    jfh.appendChild(h3);

    let jfb = document.createElement("div");
    jfb.className = "mmbd";
    jf.appendChild(jfb);

    // voucher no end

    // debit
    let dr = document.createElement("div");
    dr.className = "inbox";
    dr.style.width = "16%";
    div.appendChild(dr);

    let drh = document.createElement("div");
    drh.className = "hib";
    dr.appendChild(drh);

    let h4 = document.createElement("h3");
    h4.innerText = "Debit (Rs.)";
    drh.appendChild(h4);

    let drb = document.createElement("div");
    drb.className = "mmbd";
    dr.appendChild(drb);

    // debit end

    // credit
    let cr = document.createElement("div");
    cr.className = "inbox";
    cr.style.width = "16%";
    div.appendChild(cr);

    let crh = document.createElement("div");
    crh.className = "hib";
    cr.appendChild(crh);

    let h5 = document.createElement("h3");
    h5.innerText = "Credit (Rs.)";
    crh.appendChild(h5);

    let crb = document.createElement("div");
    crb.className = "mmbd";
    cr.appendChild(crb);

    // credit end

    // drcr
    let drCr = document.createElement("div");
    drCr.className = "inbox";
    drCr.style.width = "6%";
    div.appendChild(drCr);

    let drcrh = document.createElement("div");
    drcrh.className = "hib";
    drCr.appendChild(drcrh);

    let h6 = document.createElement("h3");
    h6.innerText = "Dr./Cr.";
    drcrh.appendChild(h6);

    let drcrb = document.createElement("div");
    drcrb.className = "mmbd";
    drCr.appendChild(drcrb);

    // drcr end

    // balance
    let balance = document.createElement("div");
    balance.className = "inbox";
    balance.style.width = "16%";
    div.appendChild(balance);

    let blnch = document.createElement("div");
    blnch.className = "hib";
    balance.appendChild(blnch);

    let h7 = document.createElement("h3");
    h7.innerText = "Balance";
    blnch.appendChild(h7);

    let blncb = document.createElement("div");
    blncb.className = "mmbd";
    balance.appendChild(blncb);

    // balance end

    // add transaction




}


ledger("Cash");
