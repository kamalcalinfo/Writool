let toggleOurPracticeItem = e => {
    let togglingEle = e.parentNode.getElementsByClassName('content')[0];
    let togglingEleHeight = togglingEle.style.height;
    console.log(togglingEleHeight);
    if (togglingEleHeight === '' || togglingEleHeight === '0px') {
        togglingEle.style.height = 'auto';
        togglingEle.style.padding = '10px';
    } else {
        togglingEle.style.height = '0px';
        togglingEle.style.padding = '0px';
    }
};