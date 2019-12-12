
    
    const webDevJourneyPage = document.createElement('div');
    webDevJourneyPage.id = 'webDevJourney';
    for (var i = 0; i < webDevJourney.length; i++)  {

        //const h3Header = document.createElement('h3');
        //const h5header = document.createElement('h5');
        //const externalLink = document.createElement('a');
        const paragraph = document.createElement('p');
        //const pageBreak = document.createElement('br');
        
        //h3Header.className = 'h3header';
        paragraph.id = 'paragraph' + i;
        paragraph.textContent = webDevJourney[i];
        paragraph.className = 'paragraph ' +  'paragraph' + i;
        //webDevJourneyPage.appendChild(h3Header);
        webDevJourneyPage.appendChild(paragraph);      
        //webDevJourneyPage.appendChild(pageBreak);
    }

        bodytext.appendChild(webDevJourneyPage);