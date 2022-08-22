const puppeteer = require('puppeteer');

(async () => {
    try {
        const browser = await puppeteer.launch();
        const page = await browser.newPage();

        await page.goto('https://www.booking.com/');
        await page.setViewport({width: 1280, height: 2560});

        await page.type('#ss', 'Hilton Garden Inn Vilnius City Centre, Gediminas Avenue, Vilnius, Lithuania');

        await page.click('.xp__dates');

        await page.click('.bui-calendar__dates');

        await page.click("#frm > div.xp__fieldset.js--sb-fieldset.accommodation > div.xp__dates.xp__group > div.xp-calendar > div > div > div.bui-calendar__content > div:nth-child(2) > table > tbody > tr:nth-child(2) > td:nth-child(1)", {delay: 100});
        await page.click("#frm > div.xp__fieldset.js--sb-fieldset.accommodation > div.xp__dates.xp__group > div.xp-calendar > div > div > div.bui-calendar__content > div:nth-child(2) > table > tbody > tr:nth-child(2) > td:nth-child(6)", {delay: 100});

        console.log('Test point 1');

        await page.screenshot({path: "test1.png", fullPage: true});

        await page.click('.xp__button');

            await page.screenshot({path: "test2.png"});

        console.log('Test point 2');

        setTimeout(async () => {
            await page.close();
            await browser.close();
        }, 20000);

        console.stdlog = console.log.bind(console);
        console.logs = [];
        console.log = function () {
            console.logs.push(Array.from(arguments));
            console.stdlog.apply(console, arguments);
        }


    } catch (error) {
        console.log(error);
    }
})();