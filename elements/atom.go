package elements

type Atom struct {
	id   string
	body string
}

func (a Atom) GetBody() string {
	return a.body
}

func (a *Atom) SetID(id string) {
	a.id = id
}

func (a Atom) GetID() string {
	return a.id
}

func NewAtom(body string) *Atom {
	return &Atom{body: body}
}
