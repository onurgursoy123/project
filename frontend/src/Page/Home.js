import React from "react";
import {
  Card,
  FormGroup,
  Label,
  Input,
  Button,
  CardHeader,
  Table,
} from "reactstrap";

const Home = () => {
  return (
    <div>
      <Card id="booksupply">
        <CardHeader>Kitap Temini</CardHeader>
        <FormGroup id="booksupplyform">
          <Label>Kişiler</Label>
          <Input id="booksupplyselect" name="select" type="select"></Input>
          <Card id="bookstime">
            <Label>Kitaplar</Label>
            <Input id="books" name="select" type="select"></Input>
            <Label>Tarihi</Label>
            <Input id="time" name="select"></Input>
            <Button id="bookstimeadd">+</Button>
          </Card>
        </FormGroup>
      </Card>
      <Card id="createpesonal">
        <CardHeader>Kitap Temini</CardHeader>
        <FormGroup id="createpesonalform">
          <Label>Adı</Label>
          <Input id="personal" name="select"></Input>
          <Label>Kişi Tipi</Label>
          <Input id="userrole" name="select" type="select">
            <option>2</option>
          </Input>
        </FormGroup>
        <Button id="createpesonaladd">+</Button>
      </Card>
      <Card id="booksbuyer">
        <CardHeader>Temindeki Kitaplar</CardHeader>
        <Table>
          <thead>
            <tr>
              <th>Kişinin Adı</th>
              <th>Kitabın Adı</th>
              <th>Alım Tarihi</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr></tr>
            <tr></tr>
            <tr></tr>
          </tbody>
        </Table>
      </Card>
    </div>
  );
};

export default Home;
