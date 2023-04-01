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

func NewWebpage(webpageDef string) (Webpage, error) {

	var webpage Webpage
	var rawWebpage map[string]interface{}

	data, err := ioutil.ReadFile(webpageDef)
	if err != nil {
		return Webpage{}, err
	}

	err = json.Unmarshal(data, &rawWebpage)
	if err != nil {
		return Webpage{}, err
	}

	var sectionsDef = rawWebpage["sections"].([]interface{})

	for _, section := range sectionsDef {
		section, err := NewSection(section.(string))
		if err != nil {
			return Webpage{}, err
		}

		webpage.Sections = append(webpage.Sections, section)
	}

	return webpage, nil

}
