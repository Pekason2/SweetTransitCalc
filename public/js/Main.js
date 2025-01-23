window.addEventListener("load", async function ()
{
    let $calcClass = (await import("./Calculator.js")).Calculator;
    let $calculator = new $calcClass;

}, {once: true});