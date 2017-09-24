unit Unit2;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, FileUtil, Forms, Controls, Graphics, Dialogs, StdCtrls,
  Buttons;

type

  { TForm2 }

  TForm2 = class(TForm)
    Button1: TButton;
    Button2: TButton;
    Memo1: TMemo;
    SaveDialog1: TSaveDialog;
    procedure Button1Click(Sender: TObject);
    procedure Button2Click(Sender: TObject);
    procedure FormCreate(Sender: TObject);
  private
    { private declarations }
  public
    { public declarations }
  end;

var
  Form2: TForm2;

implementation
uses Unit1;
{$R *.lfm}

{ TForm2 }

procedure TForm2.Button1Click(Sender: TObject) ;
begin
      if SaveDialog1.Execute then
      Memo1.Lines.SaveToFile(UTF8ToSys(SaveDialog1.FileName));
      //Memo1.Lines.SaveToFile(UTF8ToAnsi(FName) +'.txt');
end;

procedure TForm2.Button2Click(Sender: TObject);
begin
  Form2.Close;
end;

procedure TForm2.FormCreate(Sender: TObject);
begin
  left:=1;
  top:=1;
  Memo1.Lines.Clear;
  Memo1.Lines.Add('№ штамма: '+ Form1.StringGrid1.Cells[1,0]);
  Memo1.Lines.Add('Биотоп выделения: '+ Form1.StringGrid1.Cells[1,1]);
  Memo1.Lines.Add('Дата выделения штамма: '+ Form1.StringGrid1.Cells[1,2]);
  Memo1.Lines.Add('Примечание: '+ Form1.StringGrid1.Cells[1,3]);
  Memo1.Lines.Add(Form1.StringGrid2.Cells[0,1]+' '+Form1.StringGrid2.Cells[1,1]+' '+Form1.StringGrid2.Cells[2,1]);
  Memo1.Lines.Add(Form1.StringGrid2.Cells[0,2]+' '+Form1.StringGrid2.Cells[1,2]+' '+Form1.StringGrid2.Cells[2,2]);
  Memo1.Lines.Add(Form1.StringGrid2.Cells[0,3]+' '+Form1.StringGrid2.Cells[1,3]+' '+Form1.StringGrid2.Cells[2,3]);
  Memo1.Lines.Add(Form1.StringGrid2.Cells[0,4]+' '+Form1.StringGrid2.Cells[1,4]+' '+Form1.StringGrid2.Cells[2,4]);
  Memo1.Lines.Add('Y=-0.770764418+0.00601804146*x1+0.0112234521*x2+0.00936905264*x3+0.131805643*x4');
  Memo1.Lines.Add(Form1.Label2.caption);
  Memo1.Lines.Add(Form1.Label3.caption);
end;

end.

