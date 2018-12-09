package element

type Atom struct {
	id   string
	body string
}

func (a Atom) GetBody() string {
	return a.body
}
