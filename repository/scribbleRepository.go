package repository

import (
	"encoding/json"
	"fmt"

	"github.com/marcomilon/wasi/element"
	scribble "github.com/nanobox-io/golang-scribble"
)

type ScribbleRepository struct {
	dbName string
	db     *scribble.Driver
}

func NewScribbleRepository(dbname string, storegePath string) (ScribbleRepository, error) {

	var r ScribbleRepository

	db, err := scribble.New(storegePath, nil)
	if err != nil {
		return r, err
	}

	r = ScribbleRepository{dbname, db}

	return r, nil
}

func (s ScribbleRepository) Store(e element.Identifier) {
	// fmt.Print("Body: " + e.GetBody())
	//uuidStr := uuid4.New().String()
	//e.SetID(uuidStr)

	b, _ := json.Marshal(e)
	fmt.Println("Json: " + string(b))
	// if err := s.db.Write(s.dbName, uuidStr, e); err != nil {
	// }

}

func (s ScribbleRepository) List() []element.Identifier {
	var list []element.Identifier
	return list
}
