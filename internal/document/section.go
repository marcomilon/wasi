package document

import (
	"bytes"
	"encoding/json"
	"html/template"
	"io/ioutil"
)

type Section struct {
	ID       string                 `json:"id"`
	Metadata map[string]interface{} `json:"metadata"`
	Data     map[string]interface{} `json:"data"`
}

func NewSection(sectionSrc string) (Section, error) {

	section, err := extract(sectionSrc)

	if err != nil {
		return Section{}, err
	}

	return section, nil

}

func (s Section) Render() (string, error) {

	path := s.Metadata["template"].(string)

	tmpl, err := template.ParseFiles(path)
	if err != nil {
		return "", err
	}

	var buff bytes.Buffer

	err = tmpl.Execute(&buff, s.Data)
	if err != nil {
		return "", err
	}

	return buff.String(), nil

}

func extract(sectionStr string) (Section, error) {

	data, err := ioutil.ReadFile(sectionStr)
	if err != nil {
		return Section{}, err
	}

	var section Section

	err = json.Unmarshal(data, &section)
	if err != nil {
		return Section{}, err
	}

	return section, nil

}
