package document

import (
	"encoding/json"
	"io/ioutil"
)

type Webpage struct {
	ID       string
	Sections []Section
}

func (w Webpage) Render() (string, error) {

	var rendered string

	for _, section := range w.Sections {
		renderedSection, err := section.Render()
		if err != nil {
			return "", err
		}

		rendered += renderedSection
	}

	return rendered, nil

}

func NewWebpage(webpageDef []byte) (Webpage, error) {

	var webpage Webpage
	var rawWebpage map[string]interface{}

	err := json.Unmarshal(webpageDef, &rawWebpage)
	if err != nil {
		return Webpage{}, err
	}

	var sectionsDef = rawWebpage["sections"].([]interface{})

	for _, section := range sectionsDef {

		sectionDef := section.(string)

		data, err := ioutil.ReadFile(sectionDef)
		if err != nil {
			return Webpage{}, err
		}

		section, err := NewSection(data)
		if err != nil {
			return Webpage{}, err
		}

		webpage.Sections = append(webpage.Sections, section)
	}

	return webpage, nil

}
