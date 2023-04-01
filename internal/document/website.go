package document

import (
	"encoding/json"
	"io/ioutil"
)

type Website struct {
	ID       string
	Webpages []Webpage
}

func NewWebsite(websiteDef string) (Website, error) {

	var website Website
	var rawWebsite map[string]interface{}

	data, err := ioutil.ReadFile(websiteDef)
	if err != nil {
		return Website{}, err
	}

	err = json.Unmarshal(data, &rawWebsite)
	if err != nil {
		return Website{}, err
	}

	var webpageDef = rawWebsite["webpages"].([]interface{})
	for _, webpage := range webpageDef {
		webpage, err := NewWebpage(webpage.(string))
		if err != nil {
			return Website{}, err
		}

		website.Webpages = append(website.Webpages, webpage)
	}

	return website, nil

}
