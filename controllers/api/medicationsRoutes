const router = require("express").Router();
const { Medication, Dog } = require("../../models");
// const withAuth = require('../../utils/auth');

// CREATE a Medication
router.post("/", async (req, res) => {
  try {
    const newMedication = await Medication.create({
      ...req.body,
    });
    res.status(200).json(newMedication);
  } catch (err) {
    res.status(400).json(err);
  }
});

// GET all Medications
router.get("/", async (req, res) => {
  try {
    const medicationsData = await Medication.findAll();
    res.status(200).json(medicationsData);
  } catch (err) {
    console.log(err);
    res.status(500).json(err);
  }
});

// GET a single Medication
router.get("/:id", async (req, res) => {
  try {
    const medicationData = await Medication.findByPk(req.params.id, {
      include: [
        {
          model: Dog,
        },
      ],
    });
    if (!medicationData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this user." });
      return;
    }
    res.status(200).json(medicationData);
  } catch (err) {
    console.log(err);
    res.status(500).json(err);
  }
});

// DELETE a Medication
router.delete("/:id", async (req, res) => {
  try {
    const medicationData = await Medication.destroy({
      where: {
        id: req.params.id,
      },
    });

    if (!medicationData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this User" });
      return;
    }

    res.status(200).json(medicationData);
  } catch (err) {
    res.status(500).json(err);
  }
});
module.exports = router;
