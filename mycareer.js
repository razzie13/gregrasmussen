const myCareerPage = document.createElement('div');
myCareerPage.id = 'mycareer';
    for (var i = 0; i < myCareer.length; i++)  {

        const h3Header = document.createElement('h3');
        const paragraph = document.createElement('p');
        const pageBreak = document.createElement('br');
        
        h3Header.className = 'h3text';
        h3Header.textContent = myCareer[i][0];
        paragraph.id = 'paragraph' + i;
        paragraph.textContent = myCareer[i][1];
        paragraph.className = 'paragraph ' +  'paragraph' + i;

        if (myCareer[i][0] !== undefined)  {
            myCareerPage.appendChild(h3Header);
        }
        
        myCareerPage.appendChild(paragraph);

        //myCareerPage.appendChild(pageBreak);
    }

        bodytext.appendChild(myCareerPage);